<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 30/08/2017
 * Time: 10:22 AM
 */
class Database{
    private static $databaseName = 'bookdb';
    private static $host = 'localhost';
    private static $userName = 'root';
    private static $password = 'doideodep';
    private static $conn = null;

    function __construct()
    {
        die('Init function is not allowed');

    }

    public static function connect(){
        if(null == self::$conn){
            try{
                self::$conn = new PDO("mysql:host=". self::$host .";". "dbname=". self::$databaseName, self::$userName, self::$password);

            }catch (PDOException $e){
                die($e->getMessage());
            }
        }
        return self::$conn;
    }

    public function disconnect(){
        self::$conn = null;
    }
}

?>