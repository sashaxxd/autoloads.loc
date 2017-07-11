<?php
/**
 * Created by PhpStorm.
 * User: sashapc
 * Date: 08.07.2017
 * Time: 23:00
 */

namespace app\controllers;


use app\models\TestModel;

class TestController extends TestModel
{
    private $test = 'bro';

    public function getChel()
    {
        return $this->chel; 
    }
    public static function getZ()
    {
        echo 'Статический метод';
    }

}

$chel = new TestController();
$ch = $chel->getChel();
