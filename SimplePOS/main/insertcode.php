
<?php

session_start();

$db = mysqli_connect("localhost", "root", "", "pointofsale");


if (isset($_POST['insertcustomer'])) {


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


if (isset($_POST['insertsupplier'])) {
    $supplier_name = $_POST['supplier_name'];
    $supplier_no_items = $_POST['supplier_no_items'];


    $query = "INSERT INTO tblsupplier (`supplier_name`, `supplier_no_items`) VALUES ('$supplier_name','$supplier_no_items')";
    $query_run = mysqli_query($db, $query);

    if ($query_run) {

        $_SESSION['status'] = "Supplier Added Successfully";
        $_SESSION['status_code'] = "success";
        header("Location:suppliers.php");
    } else {
        $_SESSION['status'] = "Supplier Not Added";
        $_SESSION['status_code'] = "error";
        header("Location:suppliers.php");
    }
}

if (isset($_POST['insertitems'])) {

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


    $query = "INSERT INTO tbl_items (`item_name`, `item_description`, `item_unit_cost`, `item_unit_price`, `item_tax`, `item_quantity`, `item_stock`, `item_stock_alert`, `item_category`, `item_supplier`, `item_picture`) 
                VALUES ('$item_name', '$item_description', '$item_unit_cost', '$item_unit_price', '$item_tax', '$item_quantity', '$item_stock', '$item_stock_alert', '$item_category', '$item_supplier', '$item_picture')";
    $query_run = mysqli_query($db, $query);

    if ($query_run) {

        $_SESSION['status'] = "Item Added Successfully";
        $_SESSION['status_code'] = "success";
        header("Location:items.php");
    } else {
        $_SESSION['status'] = "Item Not Added";
        $_SESSION['status_code'] = "error";
        header("Location:items.php");
    }
}

if (isset($_POST['insertcategory'])) {
    $category_name = $_POST['category_name'];
    $category_no_items = $_POST['category_no_items'];


    $query = "INSERT INTO tbl_categories (`category_name`, `category_no_items`) VALUES ('$category_name','$category_no_items')";
    $query_run = mysqli_query($db, $query);

    if ($query_run) {

        $_SESSION['status'] = "Categories Added Successfully";
        $_SESSION['status_code'] = "success";
        header("Location:categories.php");
    } else {
        $_SESSION['status'] = "Categories Not Added";
        $_SESSION['status_code'] = "error";
        header("Location:categories.php");
    }
}




?>
