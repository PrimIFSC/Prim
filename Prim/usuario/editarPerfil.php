        <?php
        //session_start();
        include '../pagina/principal.php';
        ini_set('display_errors', TRUE);
        $id = $_SESSION['id'];
//        include '../conectar.php';
        $sql = "select * from usuario where id = $id";
        $resultado = mysqli_query($conexao, $sql);
        
        $linha = mysqli_fetch_array($resultado);
        
        ?>
        
<div id="edit">
    <div class="row">
          <div class="col-md-6 col-md-offset 3">
            <center> 
        <div id="content">
            <br><h3 id="up">Editar perfil</h3>
        <form method="post" action="<?=$url?>usuario/editar.php">
            <input type="hidden" name="id" value="<?= $id ?>">
            <input id="confi" name="arquivo" type="file"><img src="<?=$url?>img/fotoCont.png" height="70" width="70"/><br><br>
            <h4 id="confi">Informações pessoais</h4>
            Nome: <input type="text" name="nome" value="<?= $linha['nome'] ?>" class="form-control"><br><br>
            <h4 id="confi">Informações de contato</h4>
            E-mail: <input type="text" name="email" value="<?= $linha['email'] ?>" class="form-control"><br><br>
            
    <h4>Alterar fundo</h4>
<br>

<div id="per">

<input name="fundo" type="file"><br>
    <a href="<?=$url?>config/cor.php"><img src="<?=$url?>img/cor.png" height="40"><br>Cores</a><br>
    <input id="save" type="submit" value="Salvar"<button onclick="myFunction3()"></button>
        </form>
</div>



</div>
                
            </center>
          </div>
    </div>
</div>

        <p id="demo"></p>

<script>
function myFunction3() {
    var txt;
    if (confirm("Suas alterações foram salvas")) {
        location.href="<?=$url?>pagina/principal.php";
    } else {
        location.href='<?=$url?>usuario/editarPerfil.php';
    }
    document.getElementById("demo").innerHTML = txt;
}
</script> 
    </body>
</html>



