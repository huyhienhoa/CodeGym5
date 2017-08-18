<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15/08/2017
 * Time: 6:02 PM
 */
require 'database.php';
$category_id=1;
if(isset($_GET['category_id'])){
    $category_id = $_GET['category_id'];
}

//$category_id = $_GET['category_id'];
//if(!isset($category_id)){
//    $category_id = 1;
//}

$query = "SELECT * FROM categories
          WHERE categoryID = $category_id";
$category = $db->query($query);
$category = $category->fetch();
$category_name = $category['categoryName'];

$query = 'SELECT * FROM categories ORDER BY categoryID';
$categories = $db->query($query);

$query = "SELECT *FROM products WHERE categoryID = $category_id
          ORDER BY productID";
$products = $db->query($query);

?>

<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <title>My Guitar Shop</title>
    <link rel="stylesheet" href="main.css" type="text/css">
</head>
<body>
<div id="page">
    <div id="main">
        <h1>Product List</h1>
        <div id="sidebar">
            <h2>Categories : </h2>
            <ul class="nav">
                <?php foreach ($categories as $category) : ?>
                    <li>
                        <a href="?category_id=<?=$category['categoryID']?>">
                            <?=$category['categoryName'];?>
                        </a>
                    </li>
                <?php endforeach;?>
            </ul>
        </div>

        <div id="content">
            <h2><?=$category_name;?></h2>
            <table>
                <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Price</th>
                </tr>
                <?php foreach ($products as $key => $product):?>
                <?php if($key%2 == 0):?>
                    <tr class="even">
                        <td><?=$product['productCode'];?></td>
                        <td><?=$product['productName'];?></td>
                        <td><?=$product['listPrice'];?></td>
                    </tr>
                <?php else:?>
                        <tr class="odd">
                            <td><?=$product['productCode'];?></td>
                            <td><?=$product['productName'];?></td>
                            <td><?=$product['listPrice'];?></td>
                        </tr>    
                <?php endif;?>    
                <?php endforeach;?>
            </table>
            
            <p><a href="add_product_form.php">Add Product</a></p>
        </div>
    </div>
</div>
</body>
</html>
