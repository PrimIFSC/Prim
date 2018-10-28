<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
//include '../usuario/autenticar.php';
session_start();
include '../conectar.php';
        //$cor = $_POST['cor'];
        ?>
 

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="../css/style.css">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!--<title>Bootstrap 101 Template</title>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <link href="css/style.css" rel="stylesheet"/>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<!--      <div class="row">
          <div class="col-md-6 col-md-offset 3">
            <center> 
        <div id="content">
             
        </div>
            </center>
          </div>
      </div>-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <div id="nav">
            <br>
            <ul>              
                <li id="co"><img src="../img/config.png" height="35" width="35" onclick="prim()" /></li>	
                <li id="prim"><a href="../pagina/principal.php">PRIM</a></li>
                <li id="user"><a href="../usuario/editarPerfil.php"><?=$_SESSION['nome']?></a></li>
                <li id="user2"><a href="../usuario/receber.php"><img src="../img/not.png" height="30" width="30"/></a></li>
            </ul>
	</div>
        <?php
            
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