<?php
require_once __DIR__ . '/../controllers/CommentController.php';

?>


<form id="formx" action="javascript:void(null);" onsubmit="call()" method="post">
    <input type="text" name="name">
    <input type="submit" value="add">
</form>
<script type="text/javascript" language="javascript">
    function call() {
        var msg   = $('#formx').serialize();
        $.ajax({
            type: 'POST',
            url: '../controllers/CommentController.php',
            data: msg,
            success: function() {
                $('#res').load('/ #res'); //Обновляем нужный блок
                $('#formx')[0].reset();// Очистка формы после отправки
            },

            error:  function(xhr, str){
                alert('Возникла ошибка: ' + xhr.responseCode);
            }
        });

    }
</script>

</body>
</html>
