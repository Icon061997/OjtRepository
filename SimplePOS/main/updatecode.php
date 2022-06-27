<?php
session_start();

$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'pointofsale');

if (isset($_POST['customer_updatedata'])) {

    $id = $_POST['update_id'];
    $name =   $_POST['name'];
    $gender =  $_POST['gender'];
    $email =  $_POST['email'];
    $telno =    $_POST['telno'];
    $mobileno = $_POST['mobileno'];
    $address =  $_POST['address'];

    $query = "UPDATE customers SET name='$name', gender='$gender', email='$email', telno='$telno', mobileno='$mobileno', address='$address' WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['status'] = "Data Update Successfully";
        $_SESSION['status_code'] = "success";
        header("Location:customers.php");
    } else {
        $_SESSION['status'] = "Data Not Update";
        $_SESSION['status_code'] = "error";
        header("Location:customers.php");
    }
}

if (isset($_POST['supplier_updatedata'])) {

    $supplier_id = $_POST['supplier_update_id'];
    $supplier_name =   $_POST['supplier_name'];
    $supplier_no_items =  $_POST['supplier_no_items'];


    $query = "UPDATE tblsupplier SET supplier_name='$supplier_name', supplier_no_items='$supplier_no_items' WHERE supplier_id='$supplier_id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['status'] = "Supplier Update Successfully";
        $_SESSION['status_code'] = "success";
        header("Location:suppliers.php");
    } else {
        $_SESSION['status'] = "Supplier Not Update";
        $_SESSION['status_code'] = "error";
        header("Location:suppliers.php");
    }
}


if (isset($_POST['item_updatedata'])) {

    $item_id = $_POST['item_id'];
    $item_name = $_POST['item_name'];
    $item_description = $_POST['item_description'];
    $item_unit_cost = $_POST['item_unit_cost'];
    $item_unit_price = $_POST['item_unit_price'];
    $item_tax = $_POST['item_tax'];
    $item_quantity = $_POST['item_quantity'];
    $item_stock = $_POST['item_stock'];
    $item_stock_alert = $_POST['item_stock_alert'];
    $item_category = $_POST['item_category'];
    $item_supplier = $_POST['item_supplier'];
    $item_picture = $_POST['item_picture'];

    $query = "UPDATE tbl_items SET 
    item_name='$item_name', 
    item_description='$item_description', 
    item_unit_cost='$item_unit_cost', 
    item_unit_price='$item_unit_price',
    item_tax='$item_tax', 
    item_quantity='$item_quantity',
    item_stock='$item_stock', 
    item_stock_alert='$item_stock_alert',
    item_category='$item_category', 
    item_supplier='$item_supplier',
    item_picture='$item_picture'
    WHERE item_id='$item_id'";

    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['status'] = "Item Update Successfully";
        $_SESSION['status_code'] = "success";
        header("Location:items.php");
    } else {
        $_SESSION['status'] = "Item Not Update";
        $_SESSION['status_code'] = "error";
        header("Location:items.php");
    }
}

if (isset($_POST['category_updatedata'])) {

    $category_id = $_POST['category_update_id'];
    $category_name =   $_POST['category_name'];
    $category_no_items =  $_POST['category_no_items'];


    $query = "UPDATE tbl_categories  SET category_name='$category_name', category_no_items='$category_no_items' WHERE category_id='$category_id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['status'] = "Categories Update Successfully";
        $_SESSION['status_code'] = "success";
        header("Location:categories.php");
    } else {
        $_SESSION['status'] = "Categories Not Update";
        $_SESSION['status_code'] = "error";
        header("Location:categories.php");
    }
}
