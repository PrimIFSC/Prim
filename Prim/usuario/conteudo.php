<?php
session_start();
include '../conectar.php';

$id_usuario = $_SESSION[id];
$id_contato = $_POST[id_contato];
$mensagem = $_POST['mensagem'];
$tipo = $_POST['tipo'];
//echo $id_usuario;
//echo $id_contato;
//echo $tipo;

$sql = "insert into mensagem (usuario_id, contato_id, hora, conteudo, tipo) values ('$id_usuario', '$id_contato', NOW(), '$mensagem', '$tipo')";

mysqli_query($conexao, $sql);

//header("Location: mensagem.php");

//echo $mensagem;