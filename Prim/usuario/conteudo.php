<?php
session_start();

$id_usuario = $_SESSION[id];
$id_contato = $_POST[id_contato];
$mensagem = $_POST['mensagem'];
echo $id_usuario;
echo $id_contato;

$sql = "insert into conteudo (conteudo) values ($mensagem)";

mysqli_query($conexao, $sql);

$query = "insert into mensagem (usuario_id) values ($id_usuario)";

mysqli_query($conexao, $query);

//header("Location: ../usuario/mensagem.php");

echo $mensagem;