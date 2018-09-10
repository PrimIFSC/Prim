<?php
include '../cabe/cabecalho.php';

?>
<div id="config">
    <h2>Feedback</h2><br><br>

<form method="post" action="comentFeedback.php">
    
<input type="radio" name="optFeedback" value="sugestao" checked>Sugestão
<input type="radio" name="optFeedback" value="problema">Problema<br><br><br>
        
            Assunto: <input type="text" name="assunto"><br><br><br>
            Seu feedback: <textarea name="feedback"></textarea><br><br><br>
            <input id="env" type="submit" value="Enviar"<button onclick="myFunction4()"></button>
        </form>
<p id="demo"></p>

<script>
function myFunction4() {
    var txt;
    if (confirm("Deseja enviar o feedback?")) {
        location.href="../pagina/principal.php";
    } else {
        location.href='feedback.php';
    }
    document.getElementById("demo").innerHTML = txt;
}
</script>

</div>