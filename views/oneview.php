<?php
require_once __DIR__ . '/../controllers/OneController.php';

 ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Тест</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../web/css/index.css" rel="stylesheet">
<link href="../web/css/site.css" rel="stylesheet">
</head>
<body>
   <div id="wb_LayoutGrid1">
      <div id="LayoutGrid1">
         <div class="row">
            <div class="col-1">
               <div id="wb_BulletedList1" style="display:inline-block;width:100%;z-index:0;">
                  <div>
                      <?php foreach ($model as $item):  ?>
                     <div class="bullet" style="">O</div>
                      <div class="item item0"><span style="color:#FFFFFF;font-family:'Roboto Light';font-size:13px;line-height:18px;">
                              <?= $item; ?></span></div>
                      <?php endforeach; ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

</body>
</html>
