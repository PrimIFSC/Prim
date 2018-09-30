<?php
//session_start();
include '../conectar.php';
include '../cabe/cabecalho.php';
//include './autenticar.php';

$sql = "select * from mensagem where contato_id = $_SESSION[id]";
$resultado = mysqli_query($conexao, $sql);  

?>
<div id="config">
<table id="mens">
    <?php
while ($linha = mysqli_fetch_array($resultado)) {
    $sql2 = "select usuario.nome as nome, usuario.id as id from usuario join mensagem on $linha[usuario_id]=usuario.id";
    $resultado2 = mysqli_query($conexao, $sql2);
    
    while ($linha2 = mysqli_fetch_array($resultado2)){
    ?>
    
    <tr>
        <td><br><a id="li" href="mensagem2.php?id=<?= $linha2['id']?>&nome=<?= $linha2['nome']?>"><?= $linha2['nome']?></a></td>
    </tr>
    </form>
    <?php
    break;
}
}
?>
</table>
</div>
