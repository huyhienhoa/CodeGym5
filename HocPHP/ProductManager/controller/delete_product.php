<?php
$product_id = $_POST['product_id'];
$category_id = $_POST['category_id'];

require_once('database.php');
$query = "DELETE FROM products
          WHERE productID = '$product_id'";
$db->exec($query);

header('Location:index.php');
?>