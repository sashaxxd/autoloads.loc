<?php


namespace app\controllers;


use app\models\CommentModel;

//require_once '../models/CommentModel.php';

class CommentController extends CommentModel
{
    public function AddComment()
    {
        if (!empty($_POST['name']) && $_POST['name'] !== null) {
            $name = trim(htmlspecialchars($_POST['name']));
            if (trim($name) === "") {  //Запрет отправки одих пробелов
                die();
            }

            $this->SaveComment($name);
        }


    }

}


$object = new CommentController();

$object->AddComment()

?>


