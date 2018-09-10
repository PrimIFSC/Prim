<?php
session_start();

include '../conectar.php';

$sql = "select c.id, c.nome from usuario u join lista on u.id=lista.usuario_id join usuario c on c.id=lista.contato_id
   where u.id = $_SESSION[id]";

$resultado = mysqli_query($conexao, $sql);
?>
<link type="text/css" rel="stylesheet" href="../css/style.css">
<table id="list">
    <?php
    while ($linha = mysqli_fetch_array($resultado)) {
        ?>
        <tr>
            <img src="../img/user.svg" height="80" width="80">
        </tr>
        <tr>
        <a class="tra" <?= $linha['id']?> id="myBtn"><?= $linha['nome']?></a>
        </tr>
        

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 35%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
</head>
<body>


<!-- Trigger/Open The Modal -->


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <form action="../usuario/conteudo.php" method="post">
        <textarea id="txt" name="mensagem" placeholder="Insira sua mensagem"></textarea><br>
       <button name="tipo" value="a"> <a href="audio.php"><img src="../img/audio.png" height="20" width="20"/></a></button>  
       <button name="tipo" value="i"> <a href="imagem.php"><img src="../img/imagem.png" height="20" width="20"/></a></button>
       <button name="tipo" value="v"> <a href="video.php"><img src="../img/video.png" height="20" width="20"/></a></button>
       <button name="tipo" value="tempo"> <a href="tempo.php"><img src="../img/time.png" height="20" width="20"/></a></button>
    <input type="submit" value="Enviar">
    </form>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
    
    <?php
}
?>

</table>