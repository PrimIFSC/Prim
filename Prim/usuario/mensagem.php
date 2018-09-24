<?php
session_start();
include '../conectar.php';
include '../cabe/cabecalho.php';
include './autenticar.php';

$id_contato = $_GET['id'];
echo $id_contato;

$sql = "select * from mensagem where contato_id = $_SESSION[id]";
$resultado = mysqli_query($conexao, $sql);  

?>
<table id="mens">
    <?php
while ($linha = mysqli_fetch_array($resultado)) {
    $sql2 = "select usuario.nome, mensagem.hora, mensagem.conteudo from usuario join mensagem on $id_contato=mensagem.usuario_id";
    $resultado2 = mysqli_query($conexao, $sql2);
    
    while ($linha2 = mysqli_fetch_array($resultado2)) {
    ?>
    <tr>
        <td><br><?=$linha2['nome']?></td>
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
}
?>
</table>


