<?php
//session_start();
//include '../conectar.php';
include '../cabe/cabecalho.php';
//include './autenticar.php';

$id_contato = $_GET['id'];
$nome = $_GET['nome'];
//echo $id_contato;
//echo $_SESSION[id];

$sql = "select * from mensagem where mensagem.usuario_id=$id_contato and mensagem.contato_id=$_SESSION[id] and status='N' or mensagem.contato_id=$id_contato and mensagem.usuario_id=$_SESSION[id] and status='N' order by hora";
$resultado = mysqli_query($conexao, $sql);  


//$sql2 = "select * from mensagem where mensagem.contato_id=$_SESSION[id]";
//$resultado2 = mysqli_query($conexao, $sql2); 

?>



<div class="config">
<table id="mens">
    <tr>
    <td><br><h3><?=$nome?></h3></td>
    </tr>
    <?php    
while ($linha = mysqli_fetch_array($resultado)) {    
//    while ($linha2 = mysqli_fetch_array($resultado2)) {
//        if ($linha[id] == $linha2[id]) {
                ?>
    
    
    
            <tr>
                <td><?php if ($linha['usuario_id']==$id_contato) { 
                    echo $nome;
                            
                }else{
                    echo $_SESSION['nome'];
                    ?>
                </td>
                <?php
                            
                }if ($linha['tipo']!='t'){
                    ?>
                <img src="../upload/<?=$linha['conteudo']?>" width="200" height="200">
                    <?php
                }else                    
                    if ($linha['tipo']=='t'){
?>
                <?=$linha['conteudo']?>
                <?php
                }
                ?>
                <td id="espaco"></td>
                <td><br><br><?=$linha['hora']?></td>
            </tr>
            
            
                
            <?php
            
            $query_mens="update mensagem set status = 'L' where id = $linha[id]";
            mysqli_query($conexao, $query_mens);
            $tempo = $linha['tempo'];
            
            
//            break;
//            }else{
//   
//}
}
//}
?>
</table>
</div>

<script>
    
         setTimeout(function mensagem(){ 
                var msg = document.getElementsByClassName("config");
                while(msg.length > 0){
                    msg[0].remove(msg[0]);
                    
                }
//                document.getElementsByClassName("img").style.display = "none";
                
            }, <?=$tempo?>);
        </script>
    
<?php
$query_del="delete from mensagem where status = 'L'";
        mysqli_query($conexao, $query_del);
        ?>