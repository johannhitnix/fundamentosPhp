<?php

class Database{
    private static $host = 'localhost';
    private static $user = 'root';
    private static $password = '';
    private static $database = 'tienda_master';
    private static $port = '3308';

    public static function connect(){
        $db = new mysqli(self::$host, self::$user, self::$password, self::$database, self::$port);
        $db->query("SET NAMES 'utf8'");
        return $db;
    }    
}