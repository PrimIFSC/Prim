<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
//session_start();

include '../conectar.php';

$sql = "select c.id, c.nome from usuario u join lista on u.id=lista.usuario_id join usuario c on c.id=lista.contato_id
   where u.id = $_SESSION[id]";

$resultado = mysqli_query($conexao, $sql);
?>
<link type="text/css" rel="stylesheet" href="../css/style.css">
<div id="config">
    <div class="container">
<table id="list">
    <?php
    while ($linha = mysqli_fetch_array($resultado)) {
        ?>
    
        <tr>
            <img src="../img/user.svg" height="80" width="80">
        </tr>
        <tr>
            <button type="button" <?= $linha['id']?> class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><?= $linha['nome']?></button>
        </tr>

    


  
  <!-- Trigger the modal with a button -->
  

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <p><form action="../usuario/conteudo.php" id="form-chat" enctype="multipart/form-data" method="post">
        <div class="col-lg-12">
            <div class="input-group">
                <textarea id="txt" name="mensagem" placeholder="Insira sua mensagem" class="form-control"></textarea><br>
       <button name="tipo" value="a"> <a href="audio.php"><img src="../img/audio.png" height="20" width="20"/></a></button>  
       <button name="tipo" value="i"> <a href="imagem.php"><img src="../img/imagem.png" height="20" width="20"/></a></button>
       <button name="tipo" value="v"> <a href="video.php"><img src="../img/video.png" height="20" width="20"/></a></button>
       <button name="tipo" value="tempo"> <a href="tempo.php"><img src="../img/time.png" height="20" width="20"/></a></button>
       <input type="hidden" name="id_contato" value="<?=$linha['id']?>" />
       <span class="input-group-btn">
       <input type="submit" value="&rang; &rang;" class="btn btn-success">
       </span>
       </div>
        </div>
    </form> </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
    <?php
    }
    ?>
</table>
</body>
</html>
