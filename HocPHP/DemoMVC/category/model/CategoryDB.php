<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 30/08/2017
 * Time: 4:48 PM
 */
class CategoryDB
{
    public function getCategories(){
        $db = Database::connect();
        $query = "SELECT * FROM loaisach";
        $result = $db->query($query);
        $categories = $result->fetchAll();
        return $categories;
    }
}