<?php


namespace app\models;

class OneModel
{
    private $name = [
        '1' => 'Первый',
        '2' => 'Второй',
        '3' => 'Третий',
    ];

    public function getName()
    {
        return $this->name;
    }

}



