<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15/08/2017
 * Time: 5:50 PM
 */

$dsn = 'mysql:host=localhost;dbname=my_guitar_shop1';
$username = 'root';
$password = 'doideodep';
try{
    $db = new PDO($dsn, $username, $password);
       
}catch(PDOException $e){
    $error_message = $e->getMessage();
    include ('database_error.php');
    exit;
}

?>