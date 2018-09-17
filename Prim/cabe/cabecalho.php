<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
        $cor = $_POST['cor'];
        ?>
 

<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="../css/style.css">
        <title></title>
    </head>
    <body>
        <div id="nav">
            <br>
            <ul>              
                <li><img src="../img/config.png" height="35" width="35" onclick="prim()" /></li>	
                <li id="prim"><a href="../pagina/principal.php">PRIM</a></li>
                <li id="user"><a href="../usuario/editarPerfil.php"><?=$_SESSION[nome]?></a></li>
            </ul>
	</div>
        <?php
        // put your code here
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
        <script>
function prim() {
    var x = document.getElementById("conf");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>
    </body>
</html>

