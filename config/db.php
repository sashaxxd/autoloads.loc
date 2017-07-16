<?php

namespace app\config;

class db {

    protected static $db ;
    public static function connect() {
        self::$db = new \PDO('mysql:host=localhost;dbname=autoloads.loc;charset=utf8', 'root', '');;
    }
}