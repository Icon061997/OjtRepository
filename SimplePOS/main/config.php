
<?php

session_start();

$name = "";
$gender = "";
$email = "";
$telno = "";
$mobileno = "";
$address = "";
$id = 0;
$edit_state = false;

$db = mysqli_connect("localhost", "root", "", "pointofsale");


if (isset($_POST['save'])) {


    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $telno = $_POST['telno'];
    $mobileno = $_POST['mobileno'];
    $address = $_POST['address'];

    $query = "INSERT INTO customers (`name`, `gender`, `email`, `telno`, `mobileno`, `address`) VALUES ('$name','$gender','$email','$telno','$mobileno','$address')";
    $query_run = mysqli_query($db, $query);

    if ($query_run) {
        $_SESSION['status'] = "Register Successfully";
        $_SESSION['status_code'] = "success";
        header("Location: customers.php");
    } else {
        $_SESSION['status'] = "Data Not Register/Inserted";
        $_SESSION['status_code'] = "error";
        header("Location: customers.php");
    }
}
if (isset($_POST['update'])) {

    $id = $_POST['update_id'];
    $name =   $_POST['name'];
    $gender =  $_POST['gender'];
    $email =  $_POST['email'];
    $telno =    $_POST['telno'];
    $mobileno = $_POST['mobileno'];
    $address =  $_POST['address'];


    $query = "UPDATE customers SET name='$name', gender='$gender', email='$email', telno='$telno', mobileno='$mobileno', address='$address' WHERE id='$id'";
    $query_run = mysqli_query($db, $query);

    if ($query_run) {
        $_SESSION['status'] = "Data Update Successfully";
        $_SESSION['status_code'] = "success";
        header("Location: customers.php");
    } else {
        $_SESSION['status'] = "Data Not Update";
        $_SESSION['status_code'] = "error";
        header("Location: customers.php");
    }
}




if (isset($_POST['delete_btn_set'])) {
    $id = $_POST['id'];
    $query = "DELETE FROM customers WHERE id='$id'";
    $query_run = mysqli_query($db, $query);
}



$results = mysqli_query($db, "SELECT * FROM customers");

?>
