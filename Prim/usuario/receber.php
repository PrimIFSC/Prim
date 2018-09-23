<?php
session_start();
include '../conectar.php';
include '../cabe/cabecalho.php';

$sql = "select * from mensagem where contato_id = $_SESSION[id]";

$resultado = mysqli_query($conexao, $sql);  

?>
<table>
    <?php
while ($linha = mysqli_fetch_array($resultado)) {
    ?>
    <tr>
    <td><?=$linha['conteudo']?></td>;
    </tr>
    <tr>
    <td><?=$linha['hora']?></td>;
    </tr>
    
    <?php
}

?>
</table>

