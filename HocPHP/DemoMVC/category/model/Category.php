<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 30/08/2017
 * Time: 4:41 PM
 */
class Category
{
    private $cateid;
    private $catename;

    public function __construct($cateid,$catename)
    {
        $this->cateid = $cateid;
        $this->catename = $catename;
    }

    public function getCategoryID(){
        return $this->cateid;
    }
    
    public function setCategoryID($value){
        $this->cateid = $value;
    }

    public function getCategoryName(){
        return $this->catename;
    }
    
    public function setCategoryName($value){
        return$this->$value;
    }
}