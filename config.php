<?php

session_start();

$firstname = "";
$lastname = "";
$age = "";
$id = 0;
$edit_state = false;

$db = mysqli_connect("localhost", "root", "", "crud");


if (isset($_POST['save'])) {


    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];

    $query = "INSERT INTO cruds(firstname, lastname, age) VALUES ('$firstname','$lastname','$age')";
    $query_run = mysqli_query($db, $query);

    if ($query_run) {
        $_SESSION['status'] = "Register Successfully";
        $_SESSION['status_code'] = "success";
        header("Location: index.php");
    } else {
        $_SESSION['status'] = "Data Not Register/Inserted";
        $_SESSION['status_code'] = "error";
        header("Location: index.php");
    }
}
if (isset($_POST['update'])) {
    $firstname =   mysqli_real_escape_string($db, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $age = mysqli_real_escape_string($db, $_POST['age']);
    $id = mysqli_real_escape_string($db, $_POST['id']);

    $query = "UPDATE cruds SET firstname='$firstname', lastname='$lastname', age='$age' WHERE id='$id'";
    $query_update_run = mysqli_query($db, $query);

    if ($query_update_run) {
        $_SESSION['status'] = "Data Update Successfully";
        $_SESSION['status_code'] = "success";
        header("Location: index.php");
    } else {
        $_SESSION['status'] = "Data Not Update";    
        $_SESSION['status_code'] = "error";
        header("Location: index.php");
    }
}
if (isset($_POST['delete_btn_set'])) {
    $id = $_POST['id'];
    $query = "DELETE FROM cruds WHERE id='$id'";
    $query_delete_run = mysqli_query($db, $query);
    header("Location: index.php");
 
}



$results = mysqli_query($db, "SELECT * FROM cruds");


