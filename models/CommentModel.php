<?php


namespace app\models;

use app\config\db;
//require_once '../config/db.php';

class CommentModel extends db{

    public  function SaveComment($name){

        $sql = self::$db->prepare("INSERT INTO `comment`(`name`) VALUES (:content)");

        return $sql->execute(array(
            ':content' => $name,

        ));
    }
}



