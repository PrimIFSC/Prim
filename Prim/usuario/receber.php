                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               <?php
//session_start();

include '../cabe/cabecalho.php';

//include './autenticar.php';
$query = "select * from notificacoes where usuario_id = $_SESSION[id]";
$result = mysqli_query($conexao, $query);
while ($linha3 = mysqli_fetch_array($result)){
    $query2 = "select * from usuario where id = $linha3[contato_id]";
    $result2 = mysqli_query($conexao, $query2);
}
?>
<div class="config">
<table id="mens">
<?php
while ($linha4 = mysqli_fetch_array($result2)){
    
}

$sql = "select * from mensagem where contato_id = $_SESSION[id] and status='N' group by usuario_id";
$resultado = mysqli_query($conexao, $sql);  
?>


    <?php
while ($linha = mysqli_fetch_array($resultado)) {
    $sql2 = "select usuario.nome as nome, usuario.id as id from usuario join mensagem on mensagem.usuario_id=usuario.id where usuario_id=$linha[usuario_id]";
    $resultado2 = mysqli_query($conexao, $sql2);
    
    while ($linha2 = mysqli_fetch_array($resultado2)){
    ?>
    
    <tr>
        <td><br><a id="li" href="mensagem2.php?id=<?= $linha2['id']?>&nome=<?= $linha2['nome']?>"><?= $linha2['nome']?></a></td>
    </tr>
    
    <?php
    //notificacoes para lidas ----- não fiz ainda
   $query_not="update notificacoes set status = 'L' where contato_id = $_SESSION[id]";
   mysqli_query($conexao, $query_not);
}
}
?>
</table>
</div>