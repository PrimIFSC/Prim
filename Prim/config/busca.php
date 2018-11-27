<?php
//session_start();
//include '../conectar.php';
include '../pagina/principal.php';

$busca = $_POST['busca'];

$busca_query = "SELECT * FROM usuario WHERE nome or email LIKE '%$busca%' and id != $_SESSION[id]";
$sql = "select * from lista where usuario_id=$_SESSION[id]";

$resultado = mysqli_query($conexao, $busca_query);
$resultado_sql = mysqli_query($conexao, $sql);

while ($linha = mysqli_fetch_array($resultado)) { 
    while ($linha_sql = mysqli_fetch_array($resultado_sql)) {
            if ($linha['id'] == $linha_sql['contato_id']) {
                $contato = true;
                break;                
            } else {
                $contato = false;                
            }
        }        
        mysqli_free_result($resultado_sql);
        $resultado_sql = mysqli_query($conexao, $sql);
        ?>
            <?php
            if (!$contato) {
                ?>
<div id="edit">
    <form id="busc2" action="<?=$url?>config/busca.php" method="post">
        <input type="text" class="w3-bar-item w3-input w3-white w3-mobile" placeholder="Search.." name="busca">
        <label for="submit"><a class="w3-bar-item w3-button" style="padding: 10px;"><i class="fa fa-search"></i></a></label><input type="submit" value="" id="submit" name="submit" hidden="">
    </form>
    <br><br><br>
<table>
    <tr>
               <th id="list"><img src="<?=$url?>img/user.svg" height="60" width="60"></th>
        </tr>
        <tr>
            <th id="list"><a href="<?=$url?>usuario/inserirContatos.php?id=<?= $linha['id']?>"><?= $linha['nome']?></a></th>
        </tr>
</table>
    
    
<?php
}
}
?>
</div>

