        <?php
        session_start();
        include '../cabe/cabecalho.php';
        ini_set('display_errors', TRUE);
        $id = $_SESSION['id'];
        include '../conectar.php';
        $sql = "select * from usuario where id = $id";
        $resultado = mysqli_query($conexao, $sql);
        
        $linha = mysqli_fetch_array($resultado);
        
        ?>
        
<div id="config">
    <h2 id="up">Editar perfil</h2><br>
        <form method="post" action="editar.php">
            <input type="hidden" name="id" value="<?= $id ?>">
            <a id="confi" href="alterarFoto.php"><img src="../img/fotoCont.png" height="70" width="70"/></a><br><br>
            <h3 id="confi">Informações pessoais</h3>
            Nome: <input type="text" name="nome" value="<?= $linha['nome'] ?>"><br><br>
            <h3 id="confi">Informações de contato</h3>
            E-mail: <input type="text" name="email" value="<?= $linha['email'] ?>"><br><br>
            <input id="save" type="submit" value="Salvar"<button onclick="myFunction3()"></button>
        </form>
</div>
        <p id="demo"></p>

<script>
function myFunction3() {
    var txt;
    if (confirm("Suas alterações foram salvas")) {
        location.href="../pagina/principal.php";
    } else {
        location.href='editarPerfil.php';
    }
    document.getElementById("demo").innerHTML = txt;
}
</script>
        
    </body>
</html>



