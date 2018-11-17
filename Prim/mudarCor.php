<?php
include './usuario/autenticar.php';
include './conectar.php';

$cor = $_POST['cor'];
$query = "update fundo set usuario_id='$_SESSION[id]', cor='$cor'";
mysqli_query($conexao, $query);

header('Location: ./config/cor.php');