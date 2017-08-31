<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 29/08/2017
 * Time: 4:03 PM
 */
require 'model/database.php';
require 'model/category_db.php';

if(isset($_POST['action']))
    $action = $_POST['action'];
else if(isset($_GET['action']))
    $action = $_GET['action'];
else 
    $action = 'list_products';

if($action == 'list_products'){
//    $category_id = $_GET['category_id'];
//    if(empty($category_id))
//        $category_id = 1;
    $category_id = 1;
    isset($_GET['category_id'])?$category_id = $_GET['category_id'] : $category_id = 1;
    $categories = get_categories();
    $category_name = get_category_name($category_id);
    header('Location:view/product_list.php');
}

?>