<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 16/08/2017
 * Time: 10:25 AM
 */

$category_id = $_POST['category_id'];
$code = $_POST['productCode'];
$name = $_POST['productName'];
$price = $_POST['listPrice'];

require_once ('database.php');
$stmt = $db->prepare("INSERT INTO products (categoryID,productCode,productName,listPrice) VALUES (:category,:code,:name,:price)");
$stmt -> bindParam(':category',$category_id);
$stmt -> bindParam(':code',$code);
$stmt -> bindParam(':name',$name);
$stmt -> bindParam(':price',$price);
$stmt -> execute();
header('location:index.php');
?>

