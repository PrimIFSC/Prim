<?php
session_start();
include '../conectar.php';

$id_usuario = $_SESSION[id];
$id_contato = $_POST[id_contato];
$mensagem = $_POST['mensagem'];
$tipo = $_POST['tipo'];
echo $id_usuario;
echo $id_contato;
echo $tipo;

$sql = "insert into conteudo (conteudo, tipo) values ('$mensagem', '$tipo')";

mysqli_query($conexao, $sql);

$query = "insert into mensagem (usuario_id, contato_id, conteudo_id) values ($id_usuario, $id_contato, $id_conteudo)";

mysqli_query($conexao, $query);

//header("Location: ../usuario/mensagem.php");

echo $mensagem;