<?php
include './usuario/autenticar.php';
include './conectar.php';

$cor = $_POST['cor'];
$query = "insert into fundo (usuario_id, cor) values ($_SESSION[id], '$cor')";
mysqli_query($conexao, $query);

header('Location: ./config/cor.php');