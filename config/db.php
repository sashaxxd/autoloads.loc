<?php

namespace app\config;

class db extends config{

    public  function __construct(){
        $this->open_connect();
        //echo 'Соединено с базой данных';
    }

    private  $connect;
    private  $result;


    private function open_connect(){
        $this->connect = new \mysqli      // Подключение к базе через слеш
        ($this->DB_HOST,$this->DB_USER,$this->DB_PASSWORD,$this->BD_BASE);
        $this->connect->query("SET NAMES 'utf8'");
        if(!$this->connect){
            exit("Чето то не то с базой" . $this->connect->error);
        }


    }

    public function sql($sqli){
        $this->result = $this->connect->query($sqli);
        if(!$this->result){
            exit("Ошибка заявки к базе" . $this->connect->error);
        }
        return $this->result;
    }

}











