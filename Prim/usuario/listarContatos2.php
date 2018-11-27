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
//include './autenticar.php';


$sql = "select c.id, c.nome from usuario u join lista on u.id=lista.usuario_id join usuario c on c.id=lista.contato_id where u.id = $_SESSION[id]";

$resultado = mysqli_query($conexao, $sql);
?>
<link type="text/css" rel="stylesheet" href="../css/style.css">
<div id="config3">

     
        <div id="content">
             
        <table>
    <?php
    while ($linha = mysqli_fetch_array($resultado)) {
        ?>
    
        <tr>
            <img src="<?=$url?>img/user.svg" height="80" width="80">
        </tr>
        <tr>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" data-id="<?= $linha['id']?>"><?= $linha['nome']?></button>
        </tr> 
       

<?php
    }
    
    ?> 
         </table>
        </div>
         
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
          
              
          <form action="<?=$url?>usuario/conteudo.php" id="form-chat" enctype="multipart/form-data" method="post">
        <div class="col-lg-12">
            <div class="input-group">
       <textarea id="txt" name="mensagem" placeholder="Insira sua mensagem" class="form-control"></textarea><br>
       
<!--       <button name="arquivo" type="file" value="a"><img src="../img/audio.png" height="20" width="20"/></a></button>  -->
       
       <span class="btn btn-default btn-file"><span><img src="<?=$url?>img/galeria.png" height="40"></span><input type="file" name="arquivo" multiple="multiple" hidden accept="image/png, image/jpeg"></span>
       <select name="tempo"><img src="<?=$url?>img/time.png" height="20" width="20"/>
           <option  value="2000" selected>2s</option>
           <option  value="5000">5s</option>
           <option  value="7000">7s</option>
           <option  value="10000">10s</option>
       </select>
       <span class="input-group-btn">
           <input type="hidden" id="id" name="id">
       <input type="submit" value="&rang; &rang;" class="btn btn-success">
       </span>
       </div>
        </div>
    </form> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

</div>
    <script>    
    $('#myModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('id') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-body #id').val(id)
})
</script>



</table>
</body>
</html>
