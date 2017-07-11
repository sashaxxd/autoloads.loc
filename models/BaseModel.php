<?php
/**
 * Created by PhpStorm.
 * User: sashapc
 * Date: 08.07.2017
 * Time: 23:23
 */

namespace app\models;

use app\config\db;

class BaseModel extends db{

    public  function ReturnComment(){
    $sql = "SELECT * FROM `comment` PIVOT ORDER BY id DESC LIMIT 50";
    $res = $this->sql($sql);
    return $res;
}
}

