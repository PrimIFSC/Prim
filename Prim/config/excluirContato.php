<?php
//session_start();
include '../pagina/principal.php';
//include '../conectar.php';

?>
<div id="edit">
 
    <h3>Excluir contato</h3><br>
<?php

$sql = "select c.id, c.nome from usuario u join lista on u.id=lista.usuario_id join usuario c on c.id=lista.contato_id
   where u.id = $_SESSION[id]";

$resultado = mysqli_query($conexao, $sql);
?>

<table>
    <?php
    while ($linha = mysqli_fetch_array($resultado)) {
        ?>
        <tr>
            <th id="list"><img src="<?=$url?>img/user.svg" height="60" width="60"></th>
        </tr>
        <tr>
            <th id="list"><button onclick="myFunction2(<?= $linha['id']?>)"><?=$linha['nome']?></button></th>
        </tr>
    <?php
}
?>
</table>

<p id="demo"></p>

<script>
function myFunction2(id) {
    var txt;
    if (confirm("Deseja mesmo excluir?")) {
        location.href='<?=$url?>config/excluirCont.php?id='+id;
    } else {
        location.href='<?=$url?>config/excluirContato.php'
    }
    document.getElementById("demo").innerHTML = txt;
}
</script>
</table>
</div>

