<?php
require_once __DIR__ . '/../controllers/BaseController.php';


?>
 <div id="res">
<?php

if(array_reverse ($aux )){   //array_reverse ($aux ) фУНКЦИЯ ПЕРЕВОРАЧИВАЮЩАЯ МАССИВ
    foreach (array_reverse ($aux ) as $url => $link) {
        echo "<li><a href = \"?id={$url}\">{$link}</a></li>";

    }
}

?>
 </div>



