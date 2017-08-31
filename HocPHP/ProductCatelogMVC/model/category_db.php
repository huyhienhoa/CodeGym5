<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 29/08/2017
 * Time: 3:41 PM
 */

function get_categories(){
    global $db;
    $query = "SELECT * FROM categories ORDER BY categoryID";
    $result=$db->query($query);
    return $result;
}

function get_category_name($category_id){
    global $db;
    $query = "SELECT *FROM categories WHERE categoryID = $category_id";
    $category = $db->query($query);
    $category = $category->fetch();
    $category_name = $category['categoryName'];
    return $category_name;
 }

?>