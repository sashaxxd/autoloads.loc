<?php
/**
 * Created by PhpStorm.
 * User: sashapc
 * Date: 10.07.2017
 * Time: 12:31
 */

namespace app\controllers;


use app\models\CommentModel;

class CommentController extends CommentModel
{
    public function AddComment()
    {
        if (!empty($_POST['name']) && $_POST['name'] !== null) {
            $name = trim(strip_tags($_POST['name']));
            $this->SaveComment($name);
        }


    }

}

$object = new CommentController();
$object->AddComment();



