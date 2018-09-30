<?php
//session_start();
include '../usuario/autenticar.php';
include '../cabe/cabecalho.php';
?>
<div id="conf">
<ul>
    <li id="con"><b>Configurações</b></li>
        <li><a href="../usuario/editarPerfil.php">Editar perfil</a></li>
        <li><a href="../config/adicionarContato.php">Adicionar contato</a></li>
        <li><a href="../config/excluirContato.php">Excluir contato</a></li>
        <li><a href="../config/personalizar.php">Personalizar</a></li>
        <li><a href="../config/sobre.php">Sobre</a></li>
        <li><a href="../config/feedback.php">Feedback</a></li>
        <li><button id="sair" onclick="myFunction()">Sair</button></li>
</ul>
</div>

<p id="demo"></p>

<script>
function myFunction() {
    var txt;
    if (confirm("Deseja mesmo sair?")) {
        location.href="../config/sair.php";
    } else {
        location.href='../cabe/cabecalho.php';
    }
    document.getElementById("demo").innerHTML = txt;
}
</script>
