<?php


namespace app\controllers;


use app\models\BaseModel;

class BaseController extends BaseModel
{
    public function PrintComment(){
        $result = $this->ReturnComment();
        while ($row = $result->fetch_array()){

            $comment[$row['id']] =  $row['name'];
        }
        return $comment;
    }
}

$com = new BaseController();

$aux = $com->PrintComment();

