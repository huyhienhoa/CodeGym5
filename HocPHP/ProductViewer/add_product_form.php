<?php
    require ('database.php');
    $query = "SELECT * FROM categories ORDER BY categoryID";
    $categories = $db ->query($query);
?>
<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <title>My Guitar Shop</title>
    <link rel="stylesheet" href="main.css" type="text/css">
</head>
<body>
    <h2>ADD PRODUCT</h2>
    <form method="post" action="add_product.php">
        <div>
            <label>Category</label>
            <select name="category_id">
                <?php foreach($categories as $category):?>
                    <option value="<?=$category['categoryID'];?>">
                        <?=$category['categoryName'];?>
                    </option>
                <?php endforeach;?>
            </select>
        </div>
        <div>
            <label for="productCode">Code</label>
            <input type="text" name="productCode" id="productCode">
        </div>
        <div>
            <label for="productName">Name</label>
            <input type="text" name="productName" id="productName">
        </div>
        <div>
            <label for="listPrice">Price</label>
            <input type="text" name="listPrice" id="listPrice">
        </div>
        <div>
            <input type="submit" value="Add Product">
        </div>
    </form>
    <a href="index.php">List Product</a>
</body>
</html>