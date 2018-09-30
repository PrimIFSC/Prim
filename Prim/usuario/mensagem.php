<?php
//session_start();
include '../conectar.php';
include '../cabe/cabecalho.php';
include './autenticar.php';

$id_contato = $_GET['id'];
$nome = $_GET['nome'];
//echo $id_contato;

$sql = "select mensagem.hora, mensagem.conteudo from mensagem join usuario "
        . "on mensagem.usuario_id=usuario.id where mensagem.usuario_id=$id_contato "
        . "and mensagem.contato_id=$_SESSION[id]";
$resultado = mysqli_query($conexao, $sql);  

?>
<table id="mens">
    <?php
while ($linha = mysqli_fetch_array($resultado)) {    ?>
    <tr>
        <td><?=$nome?></td>
    </tr>
    <tr>
    <td><?=$linha['hora']?></td>
    </tr>
    <tr>
    <td><?=$linha['conteudo']?></td>
    </tr>
    <?php
    break;
}

?>
</table>


