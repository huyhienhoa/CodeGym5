<?php
require('../model/database.php');
require('../model/product_db.php');
require('../model/category_db.php');

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'list_products';
}

if ($action == 'list_products') {
    $category_id = 1;
    if (isset($_GET['category_id'])) {
        $category_id = $_GET['category_id'];
    }


    $category_name = get_category_name($category_id);
    $categories = get_categories();
    $products = get_products_by_category($category_id);

    include('product_list.php');
} else if ($action == 'delete_product') {
    $product_id = $_POST['product_id'];
    $category_id = $_POST['category_id'];

    include 'delete_product.php';

//    delete_product($product_id);

} else if ($action == 'show_add_form') {
    $categories = get_categories();
    include('product_add.php');
} else if ($action == 'add_product') {
    $category_id = $_POST['category_id'];
    $code = $_POST['code'];
    $name = $_POST['name'];
    $price = $_POST['price'];

    if (empty($code) || empty($name) || empty($price)) {
        $error = "Invalid product data. Check all fields and try again.";
        include('../errors/error.php');
    } else {
        add_product($category_id, $code, $name, $price);

        header("Location: .?category_id=$category_id");
    }
}
?>