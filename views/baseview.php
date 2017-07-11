<?php
require_once __DIR__ . '/../controllers/BaseController.php';


?>
 <div id="res">
<?php

if($aux){
    foreach ($aux as $url => $link) {
        echo "<li><a href = \"?id={$url}\">{$link}</a></li>";

    }
}

?>
 </div>



