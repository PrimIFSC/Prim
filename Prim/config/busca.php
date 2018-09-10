<?php
session_start();
include '../conectar.php';
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
            if (!$contato) {
                ?>

<table>
    <tr>
               <th id="list"><img src="../img/user.svg" height="60" width="60"></th>
        </tr>
        <tr>
            <th id="list"><a href="../usuario/inserirContatos.php?id=<?= $linha['id']?>"><?= $linha['nome']?></a></th>
        </tr>
</table>
<?php
}
}

