<?php
//session_start();
include '../conectar.php';
include '../cabe/cabecalho.php';
//include './autenticar.php';

$id_contato = $_GET['id'];
$nome = $_GET['nome'];
//echo $id_contato;

$sql = "select * from mensagem where mensagem.usuario_id=$id_contato";
$resultado = mysqli_query($conexao, $sql);  

$sql2 = "select * from mensagem where mensagem.contato_id=$_SESSION[id]";
$resultado2 = mysqli_query($conexao, $sql2); 

?>
<div id="config">
<table id="mens">
    <td></td>
    <td><br><h3><?=$nome?></h3></td>
    <?php    
while ($linha = mysqli_fetch_array($resultado)) {    
    while ($linha2 = mysqli_fetch_array($resultado2)) {
        if ($linha['id'] == $linha2['id']) {
                ?>
            <tr>
                
                <td><br><br><?=$linha['conteudo']?></td>
                <td id="espaco"></td>
                <td><?=$linha['hora']?></td>
            </tr>
                
            <?php
            break;
            }else{
   
}
}
}
?>
</table>
</div>

