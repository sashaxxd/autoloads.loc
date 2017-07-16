<?php
namespace app\views;

require_once __DIR__ . '/../controllers/BaseController.php';




?>
 <div id="res">

     <div id="wb_LayoutGrid2">
         <div id="LayoutGrid2">
             <div class="row">
                 <div class="col-1">
                     <div id="wb_Heading1" style="display:inline-block;width:100%;text-align:center;z-index:0;">
                         <h1 id="Heading1">ЧАТ</h1>
                     </div>
                     <div id="wb_BulletedList1" style="display:inline-block;width:100%;z-index:1;">
                       <?php  if($aux):  ?>
                           <?php  foreach ($aux as $item): ?>
                               <?php  foreach (array_reverse ($item) as $i): ?>
                         <div>
                             <div class="bullet" style="">&bull;</div>
                             <div class="item item0"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><?= $i;  ?></span></div>
                         </div>
                                 <?php endforeach; ?>
                               <?php endforeach; ?>
                          <?php endif; ?>
                     </div>
                 </div>
             </div>
         </div>
     </div>

 </div>



