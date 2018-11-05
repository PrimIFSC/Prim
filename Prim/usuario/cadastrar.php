<?php
include '../conectar.php';

ini_set("display_errors", true);

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$repSenha = $_POST['repSenha'];

if ($senha == $repSenha) {
$sql = "insert into usuario(nome, email, senha) values ('$nome', '$email', '$senha')";
mysqli_query($conexao, $sql);
header("Location: form_login.php");
} else {
    echo 'Senhas não conferem';
    //header("Location: form_cadastrar.php");
}






