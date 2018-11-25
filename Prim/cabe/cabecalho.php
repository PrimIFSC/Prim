<?php
include '../usuario/autenticar.php';
include '../conectar.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template fbackgroundColor: ile, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="../css/style.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!--<title>Bootstrap 101 Template</title>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <link href="css/style.css" rel="stylesheet"/>

    <!-- Bootstrap -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php
$query = "select * from fundo where usuario_id = $_SESSION[id]";
$result2 = mysqli_query($conexao, $query);
//if ($linha = mysqli_fetch_array($result2)){
//    if ($linha['cor']!=null){
//        ?>
<!--        <style>
    body{
background-color: 
    }
</style>
//<?php
//    }
//    if ($linha['imagem']!=null){
//        ?>
<style>
    body{
        background-image: 
    }
</style>-->

<?php
//        
//    }
//    
//}
?>


  </head>
  <body>
      <div class="w3-container">

  <div class="w3-bar w3-light-grey">
      <div class="w3-dropdown-click">
      <button class="w3-button" onclick="prim()">
     <a href="#" class="w3-bar-item w3-button"><img src="../img/config.png" width="20" style="margin: 10px 0;"/></a>
      </button>
      <div id="conf" class="w3-dropdown-content w3-bar-block w3-card w3-light-grey">
          <ul>
<!--    <li id="con"><b>Configurações</b></li>-->
        <li><a class="w3-bar-item w3-button" href="../usuario/editarPerfil.php">Editar perfil</a></li>
        <li><a class="w3-bar-item w3-button" href="../config/adicionarContato.php">Adicionar contato</a></li>
        <li><a class="w3-bar-item w3-button" href="../config/excluirContato.php">Excluir contato</a></li>
        <li><a class="w3-bar-item w3-button" href="../config/personalizar.php">Personalizar</a></li>
        <li><a class="w3-bar-item w3-button" href="../config/feedback.php">Feedback</a></li>
        <li><a class="w3-bar-item w3-button" id="sair" onclick="myFunction()">Sair</a></li>
</ul>
      </div>
      </div>
    <a href="../pagina/principal.php" class="w3-bar-item w3-button" style="font-size: 25px;">PRIM</a>
    <?php
    if (isset($linha['foto'])){
           ?><img class="w3-bar-item w3-button w3-right" src="../upload/<?=$linha['foto']?>" width="200" height="200"></td> <?php
        }else{
            ?><img class="w3-bar-item w3-button w3-right" src="../img/user.svg" height="40" width="40"><?php
        }
        ?>
    <a href="../usuario/editarPerfil.php" class="w3-bar-item w3-button w3-right"><?=$_SESSION['nome']?></a>
    
    
    <?php
$sql = "select *, count(id) from notificacoes where contato_id = $_SESSION[id] and status='N' group by usuario_id";
$result = mysqli_query($conexao, $sql);

?>
    <div class="w3-dropdown-click w3-right">
      <button class="w3-button" onclick="not()">
        <span><i class="material-icons">notifications</i></span>
  <span class="badge"><?= mysqli_num_rows($result)?></span> 
      </button>
      <div id="demo" class="w3-dropdown-content w3-bar-block w3-card">
          <?php while($linha2 = mysqli_fetch_array($result)){
              $usuario="select * from usuario where id = $linha2[usuario_id]";
              $result3= mysqli_query($conexao, $usuario);
              $linha3= mysqli_fetch_array($result3);
              ?>
          <a href="../usuario/mensagem2.php?id=<?=$linha3['id']?>" class="w3-bar-item w3-button"><i>Nova mensagem de </i><b><?=$linha3['nome']?></b></a>
          <?php
          }
           ?>
      </div>
    </div>
    <form id="busc" action="../config/busca2.php" method="post">
        <input type="text" class="w3-bar-item w3-input w3-white w3-mobile" placeholder="Search.." name="busca">
        <label for="submit"><a class="w3-bar-item w3-button" style="padding: 12px;"><i class="fa fa-search"></i></a></label><input type="submit" value="" id="submit" name="submit" hidden="">
    </form>
  </div>
          
</div>

<script>
function not() {
    var x = document.getElementById("demo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

function prim() {
    var x = document.getElementById("conf");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
<!--      <div class="row">
          <div class="col-md-6 col-md-offset 3">
            <center> 
        <div id="content">
             
        </div>
            </center>
          </div>
      </div>-->
<?php
$sql = "select * from notificacoes where contato_id = $_SESSION[id] and status='N'";
$result = mysqli_query($conexao, $sql);
$linha2 = mysqli_fetch_array($result);
?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
        <?php
            
        ?>
        

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

</script>
  </body>
  
</html>