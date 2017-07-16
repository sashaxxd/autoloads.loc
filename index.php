<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script type="text/javascript" src="../web/js/jquery-1.12.4.min.js"></script>
    <link href="../web/css/index.css" rel="stylesheet">
    <link href="../web/css/site.css" rel="stylesheet">
</head>
<body>

<?php
/*
 * Подключение автозагрузчика
 */
require_once  'vendor/autoload.php';
use app\config\db;
db::connect();
/*
 * Подключение дебага
 */
require_once 'functions.php';
//require_once 'views/oneview.php';
//require_once 'views/testview.php';
require_once 'views/baseview.php';
require_once 'views/comment.php';




?>



