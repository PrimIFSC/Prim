<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php
//session_start();
//include '../conectar.php';
include '../cabe/cabecalho.php';

$busca = $_POST['busca'];

$busca_query = "SELECT * FROM usuario WHERE nome or email LIKE '%$busca%' and id != $_SESSION[id]";
$sql = "select * from lista where usuario_id=$_SESSION[id]";

$resultado = mysqli_query($conexao, $busca_query);
$resultado_sql = mysqli_query($conexao, $sql);

while ($linha = mysqli_fetch_array($resultado)) { 
    while ($linha_sql = mysqli_fetch_array($resultado_sql)) {
            if ($linha['id'] == $linha_sql['contato_id']) {
                $contato = true;
                break;                
            } else {
                $contato = false;                
            }
        }        
        mysqli_free_result($resultado_sql);
        $resultado_sql = mysqli_query($conexao, $sql);
        ?>
            <?php
            if ($contato) {
                ?>
  
  <link type="text/css" rel="stylesheet" href="../css/style.css">
  <div id="config3">
    <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset 3">
            <center> 
        <div id="content">

<table>
    <tr>
               <th id="list"><img src="../img/user.svg" height="60" width="60"></th>
        </tr>
        <tr>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" data-id="<?= $linha['id']?>"><?= $linha['nome']?></button>
        </tr>
</table>
<?php
}
}
?>
        </div>
          </div>
        </div>
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
          
              
          <form action="../usuario/conteudo.php" id="form-chat" enctype="multipart/form-data" method="post">
        <div class="col-lg-12">
            <div class="input-group">
       <textarea id="txt" name="mensagem" placeholder="Insira sua mensagem" class="form-control"></textarea><br>
       
<!--       <button name="arquivo" type="file" value="a"><img src="../img/audio.png" height="20" width="20"/></a></button>  -->
       <input name="arquivo" type="file">
<!--       <input name="arquivo" type="file" value="a">
       <input name="arquivo" type="file" value="v">-->
<!--       <button name="arquivo" type="file" value="v"><img src="../img/video.png" height="20" width="20"/></a></button>-->
       <select name="tempo"><img src="../img/time.png" height="20" width="20"/>
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
