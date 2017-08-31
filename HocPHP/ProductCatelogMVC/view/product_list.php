<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 29/08/2017
 * Time: 3:53 PM
 */
include 'header.php';
?>
<div id="main">
    <div id="sidebar">
        <h1>Categories</h1>
        <ul>
            <?php foreach ($categories as $category): ?>
                <li>
                    <a href="?category_id=<?=$category['categoryID']?>">
                        <?=$category['categoryName'];?>
                    </a>
                </li>
            <?php endforeach;?>
        </ul>
    </div>
</div>
