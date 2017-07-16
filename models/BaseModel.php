<?php
/**
 * Created by PhpStorm.
 * User: sashapc
 * Date: 08.07.2017
 * Time: 23:23
 */

namespace app\models;

use app\config\db;



//require_once '../config/db.php';

//db::connect();

class BaseModel extends db{

    public $res;

    public function getMessage(){
        $result = self::$db->query("SELECT `name` FROM `comment` ORDER BY id DESC LIMIT 50");
        $return = array();
        while ($message = $result->fetchAll(\PDO::FETCH_COLUMN)) {
            $return[] = $message;
        }
        return $return;
    }

}

//$sql = new BaseModel();
//
//$sql = $sql->getMessage();
//
//print_r($sql);








