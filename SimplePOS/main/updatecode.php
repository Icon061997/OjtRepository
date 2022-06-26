<?php
session_start();

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'pointofsale');

    if(isset($_POST['updatedata']))
    {   

        $id = $_POST['update_id'];
        $name =   $_POST['name'];
        $gender =  $_POST['gender'];
        $email =  $_POST['email'];
        $telno =    $_POST['telno'];
        $mobileno = $_POST['mobileno'];
        $address =  $_POST['address'];
    
        $query = "UPDATE customers SET name='$name', gender='$gender', email='$email', telno='$telno', mobileno='$mobileno', address='$address' WHERE id='$id'";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            $_SESSION['status'] = "Data Update Successfully";
            $_SESSION['status_code'] = "success";
            header("Location:customers.php");
        }
        else
        {
            $_SESSION['status'] = "Data Not Update";
            $_SESSION['status_code'] = "error";
            header("Location:customers.php");   
        }
    }
