<?php
include '../pagina/principal.php';


?>
<div id="edit">

    <h3>Feedback</h3><br><br>

    <form method="post" action="<?=$url?>config/comentFeedback.php">
    
<input type="radio" name="optFeedback" value="sugestao" checked>Sugestão
<input type="radio" name="optFeedback" value="problema">Problema<br><br><br>
        
            Assunto: <input type="text" name="assunto"><br><br><br>
            Seu feedback: <textarea name="mensagem"></textarea><br><br><br>
            <input id="env" type="submit" value="Enviar">
        </form>
<p id="demo"></p>

<!--<script>
function myFunction4() {
    var txt;
    if (confirm("Deseja enviar o feedback?")) {
        location.href="../pagina/principal.php";
    } else {
        location.href='feedback.php';
    }
    document.getElementById("demo").innerHTML = txt;
}
</script>-->

</div>
