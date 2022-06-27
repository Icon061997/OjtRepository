<?php

session_start();

$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'pointofsale');

if (isset($_POST['delete_btn_set'])) {
    $id = $_POST['id'];

    $query = "DELETE FROM customers WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);
}

if (isset($_POST['delete_btn_set_supplier'])) {
    $supplier_id = $_POST['supplier_id'];

    $query = "DELETE FROM tblsupplier WHERE supplier_id='$supplier_id'";
    $query_run = mysqli_query($connection, $query);
}

if (isset($_POST['delete_btn_set_item'])) {
    $item_id = $_POST['item_id'];

    $query = "DELETE FROM tbl_items WHERE item_id='$item_id'";
    $query_run = mysqli_query($connection, $query);
}


if (isset($_POST['delete_btn_set_category'])) {
    $category_id = $_POST['category_id'];

    $query = "DELETE FROM tbl_categories WHERE category_id='$category_id'";
    $query_run = mysqli_query($connection, $query);
}
