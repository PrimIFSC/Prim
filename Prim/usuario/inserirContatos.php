<?php
session_start();
include '../conectar.php';

ini_set("display_errors", true);

$id = $_GET['id'];

$sql = "insert into lista (usuario_id, contato_id) values ($_SESSION[id], $id)";

mysqli_query($conexao, $sql);

header("Location: ../config/adicionarContato.php");




