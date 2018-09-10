<?php


$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];

include '../conectar.php';

$sql = "update usuario set nome='$nome', email='$email' where id = $id";

mysqli_query($conexao, $sql);

header('Location: ../pagina/principal.php');


