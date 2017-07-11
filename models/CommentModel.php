<?php
/**
 * Created by PhpStorm.
 * User: sashapc
 * Date: 08.07.2017
 * Time: 23:23
 */

namespace app\models;

use app\config\db;

class CommentModel extends db{

    public  function SaveComment($name){
        $sql = "INSERT INTO `comment`(`name`) VALUES ('$name')";
        $res = $this->sql($sql);
        return $res;
    }
}

