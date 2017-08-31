<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 30/08/2017
 * Time: 4:24 PM
 */

require ('../database/Database.php');
require ('model/category.php');
require ('model/categoryDB.php');

class ControllerCategory
{
    public function listCategory(){
        $cate = new CategoryDB();
        $categories = $cate->getCategories();
        include ('view/ListCategory.php');
    }

    public function handRequest(){
        if(isset($_POST['action'])){
            $action = $_POST['action'];
        }else if(isset($_GET['action'])){
            $action = $_GET['action'];
        }else{
            $action = 'ListCategory';
        }
        if($action == 'ListCategory')
            $this->listCategory();
    }
}