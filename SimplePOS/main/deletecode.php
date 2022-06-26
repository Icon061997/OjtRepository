<?php

$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'pointofsale');

if (isset($_POST['delete_btn_set'])) {
    $id = $_POST['id'];

    $query = "DELETE FROM customers WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);
}
