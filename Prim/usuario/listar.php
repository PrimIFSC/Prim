<?php
session_start();
include '../conectar.php';

$query = "select * from usuario where id !=  $_SESSION[id]";

$sql = "select * from lista where usuario_id=$_SESSION[id]";

$resultado = mysqli_query($conexao, $query);

$resultado_contato = mysqli_query($conexao, $sql);
?>
<link type="text/css" rel="stylesheet" href="../css/style.css">
<table>            
    <?php
    $contato = false;
    while ($linha = mysqli_fetch_array($resultado)) {
        while ($linha_contato = mysqli_fetch_array($resultado_contato)) {
            if ($linha['id'] == $linha_contato['contato_id']) {
                $contato = true;
                break;                
            } else {
                $contato = false;                
            }
        }        
        mysqli_free_result($resultado_contato);
        $resultado_contato = mysqli_query($conexao, $sql);
        ?>
            <?php
            if (!$contato) {
                ?>
           <tr>
               <th id="list"><img src="../img/user.svg" height="60" width="60"></th>
        </tr>
        <tr>
            <th id="list"><a href="../usuario/inserirContatos.php?id=<?= $linha['id']?>"><?= $linha['nome']?></a></th>
        </tr>
            <?php
        }
        
        }
        ?>
</table>
