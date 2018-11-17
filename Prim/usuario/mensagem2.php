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
    
    
    
    <tr class="<?=$linha['id']?>">
                <td><?php if ($linha['usuario_id']==$id_contato) { 
                    echo $nome;
                ?>
                    <br>
                    <?php
                }else{
                    echo $_SESSION['nome'];
                    ?>
                </td><br>
                <?php
                }if ($linha['tipo']=='t'){
?>
                <td><br><?=$linha['conteudo']?></td>
                <?php
                }if ($linha['tipo']=='i'){
                    ?>
                <td><br><img src="../upload/<?=$linha['conteudo']?>" width="200" height="200"></td>
                    <?php
                }if ($linha['tipo']=='a'){
                    ?>
                <audio autoplay="autoplay" controls="controls">
                <source src="../upload/<?=$linha['conteudo']?>" type="audio/mp3" />
                    <?php
                }if ($linha['tipo']=='v'){
                    ?>
                <video width="320" height="240" controls="controls">
                <source src="../upload/<?=$linha['conteudo']?>" type="video/mp4">
                    <?php
                }                     
                    
                ?>
                <td id="espaco"></td>
                <td><br><br><?=$linha['hora']?></td>
            </tr>
            
<!--            <script>
    mensagem();
    </script>-->
            
                
            <?php
            
            $query_mens="update mensagem set status = 'L' where id = $linha[id]";
            mysqli_query($conexao, $query_mens);
            $tempo = $linha['tempo'];
            ?>
<script>
    
         setTimeout(function mensagem(){ 
                var msg = document.getElementsByClassName("<?=$linha['id']?>");
                while(msg.length > 0){
                    msg[0].remove(msg[0]);
                    
                }
//                document.getElementsByClassName("img").style.display = "none";
                
            }, <?=$tempo?>);
        </script>
        
        <?php
        $query_del="delete from mensagem where id = $linha[id]";
        mysqli_query($conexao, $query_del);
        $query_not="insert into notificacoes (contato_id, usuario_id, mensagem_id) values ($linha[contato_id], $linha[usuario_id], $linha[id])";
        mysqli_query($conexao, $query_not);
        
                    }


//}
        
?>
        
</table>
</div>


    
<?php

        ?>
