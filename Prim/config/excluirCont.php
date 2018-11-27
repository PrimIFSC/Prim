<?php
include '../usuario/autenticar.php';

$id = $_GET['id'];


include '../conectar.php';

$sql = "delete from lista where contato_id = $id";

mysqli_query($conexao, $sql);

echo $sql;

header('Location:  '.$url.'config/excluirContato.php');