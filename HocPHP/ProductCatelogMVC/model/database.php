<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 29/08/2017
 * Time: 3:42 PM
 */

$dsn = 'mysql:host=localhost;dbname=my_guitar_shop1';
$user = 'root';
$password = 'doideodep';
try{
    $db = new PDO($dsn,$user,$password);
}catch(PDOException $e){
    $error_message = $e->getMessage();
    exit();
}
?>