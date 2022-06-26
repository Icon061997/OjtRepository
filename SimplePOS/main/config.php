
<?php

session_start();

$db = mysqli_connect("localhost", "root", "", "pointofsale");


if (isset($_POST['insertdata'])) {


    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $telno = $_POST['telno'];
    $mobileno = $_POST['mobileno'];
    $address = $_POST['address'];

    $query = "INSERT INTO customers (`name`, `gender`, `email`, `telno`, `mobileno`, `address`) VALUES ('$name','$gender','$email','$telno','$mobileno','$address')";
    $query_run = mysqli_query($db, $query);

    if ($query_run) {

        $_SESSION['status'] = "Customer Add Successfully";
        $_SESSION['status_code'] = "success";
        header("Location:customers.php");
    } else {
        $_SESSION['status'] = "Customer Not Inserted";
        $_SESSION['status_code'] = "error";
        header("Location:customers.php");
    }
}






?>
