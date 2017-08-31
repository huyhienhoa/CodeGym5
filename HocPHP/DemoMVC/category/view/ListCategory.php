<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 30/08/2017
 * Time: 4:56 PM
 *
 */
require('header.php');
?>
<div id="main">
    <div id="sidebar">
        <h1>Categories</h1>
    </div>
    <div id="content">
        <table>
            <tr>
                <th>Code</th>
                <th>Category Name</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            <?php foreach ($categories as $category):?>
                <tr>
                    <td><?=$category->getCateID();?></td>
                    <td><?=$category->getCateName();?></td>
                    <td>
                        <form method="post">
                            <input type="hidden" name="action" value="delete_category">
                            <input type="hidden" name="category_id" value="<?=$category->getCategoryID();?>" >
                            <input type="submit" value="delete"/>
                        </form>
                    </td>
                    <td>
                        <form method="update">
                            <input type="hidden" name="action" value="update_category">
                            <input type="hidden" name="category_id" value="<?=$category->getCategoryID();?>">
                            <input type="submit" value="update">
                        </form>
                    </td>
                </tr>
            <?php endforeach;?>
        </table>
        <p><a href="?action=show_add_form">Add Category</a></p>
    </div>
</div>