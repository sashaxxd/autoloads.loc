<?php


namespace app\controllers;

//require_once '../models/BaseModel.php';

use app\models\BaseModel;

class BaseController extends BaseModel
{
    public function PrintComment(){
        $result = $this->getMessage();
        return $result;
    }
}

$com = new BaseController();


$aux = $com->PrintComment();

//print_r($aux);
//
//echo '<br>';
//echo '<br>';
//echo '<br>';
//echo '<br>';
//
//
//foreach ($aux as $item){
//    foreach ($item as $i){
//              echo $i;
//              echo '<br>';
//    }
//
//}



