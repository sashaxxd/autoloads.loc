<?php

namespace app\config;

class connect {

    private $link;


    public function __construct()
    {
        if ($this->link === true)
            $this->connect();
    }


    private function connect(){

        $config = require_once 'config.php';

        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['db_name'].';charset='.$config['charset'];

        $this->link = new \PDO($dsn, $config['username'], $config['password']);

        return $this;

    }


    public function execute($sql){

        $str = $this->link->prepare($sql);

        return $str->execute();

    }

    public function query($sql)
    {
        $str = $this->link->prepare($sql);

        $str->execute();

        $result = $str->fetchAll(\PDO::FETCH_ASSOC);

        if($result === false){
            return [];
        }

        return $result;

    }

    public function column($sql)
    {
        $str = $this->link->prepare($sql);

        $str->execute();

        $result = $str->fetchAll(\PDO::FETCH_COLUMN);

        if($result === false){
            return [];
        }

        return $result;

    }
}
