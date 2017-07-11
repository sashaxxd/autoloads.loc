<?php
require_once __DIR__ . '/../controllers/CommentController.php';

?>



<script type="text/javascript" language="javascript">
    function call() {
        var msg   = $('#LayoutGrid1').serialize();
        $.ajax({
            type: 'POST',
            url: '../controllers/CommentController.php',
            data: msg,
            success: function() {
                $('#res').load('/ #res'); //Обновляем нужный блок
                $('#LayoutGrid1')[0].reset();// Очистка формы после отправки
            },

            error:  function(xhr, str){
                alert('Возникла ошибка: ' + xhr.responseCode);
            }
        });

    }
</script>
<div id="wb_LayoutGrid1">
    <form name="LayoutGrid1"  action="javascript:void(null);" onsubmit="call()" method="post" id="LayoutGrid1">
        <div class="row">
            <div class="col-1">
                <hr id="Line4" style="display:block;width:100%;height:1px;z-index:2;">
                <textarea name="name" id="TextArea1" style="display:block;width:100%;height:100px;z-index:3;" rows="2" cols="101" spellcheck="false" placeholder="&#1057;&#1086;&#1086;&#1073;&#1097;&#1077;&#1085;&#1080;&#1077;" required></textarea>
                <hr id="Line5" style="display:block;width:100%;height:1px;z-index:4;">
                <input type="submit" id="Button1" name="" value="Отправить" style="display:inline-block;width:127px;height:45px;z-index:5;">
            </div>
        </div>
    </form>
</div>
</body>
</html>
