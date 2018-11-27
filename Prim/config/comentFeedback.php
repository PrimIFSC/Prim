<?php 
include '../usuario/autenticar.php';
//include '../conectar.php'; 
//require '../PHPMailer/PHPMailerAutoload.php';
include '../PHPMailer/Email.php';

//já tem certinho ali
$botao = $_POST['optFeedback'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];
$destinatario = "primifsc@gmail.com";
$usuario_id = $_SESSION['id'];

$query = "insert into feedback (assunto, comentario, usuario_id) values ('$assunto', '$mensagem', $usuario_id)";
mysqli_query($conexao, $query);

 $email = new Email();
 $email->enviarEmail($destinatario, $assunto, $mensagem);
 
	 		  
header('Location: '.$url.'config/feedback.php'); 
	 		   
//teste
//$comentário = $comentário + $_session['email'];

