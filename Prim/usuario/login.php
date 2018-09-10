<?php
include './autenticar.php';
include '../conectar.php';

ini_set("display_errors", true);

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "select * from usuario where email = '$email' and senha = '$senha'";

$retorno = mysqli_query($conexao, $sql);

$resultado = mysqli_fetch_array($retorno);

if ($resultado == null){
    echo 'Usuario e senha nao conferem';
}else{
    logar($resultado['email'], $resultado['id'], $resultado['nome']);
    
    header("Location: ../pagina/principal.php");
}








 












 




