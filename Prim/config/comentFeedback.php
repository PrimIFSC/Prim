<?php

$botao = $_POST['optFeedback'];
$assunto = $_POST['assunto'];
$feedback = $_POST['feedback'];

$email = "primifsc@gmail.com";

mail($email, $assunto, $feedback);

header('Location: feedback.php');