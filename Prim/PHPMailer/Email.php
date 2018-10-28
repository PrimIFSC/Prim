<?php
include '../conectar.php';
require '../PHPMailer/PHPMailerAutoload.php';



class Email {

    function __construct() {
        $this->mail = new PHPMailer();
        $this->mail->Port = 465;
        $this->mail->isSMTP();
        $this->mail->SMTPAuth = true;
        $this->mail->Host = 'smtp.gmail.com';
        $this->mail->Username = 'beatriz.peserafim@gmail.com'; // mudar para um email válido
        $this->mail->Password = 'lubia123';// mudar para senha da conta
        $this->mail->SMTPSecure = 'ssl';
        $this->mail->IsHTML(true);
        $this->mail->From = $destinatario;
        $this->mail->FromName = 'Administrador do site';
    }
    
  

    public function enviarEmail($destinatario, $assunto, $mensagem) {
        $this->mail->addAddress($destinatario);
        $this->mail->Subject = $assunto;
        $this->mail->Body = $mensagem;

        if ($this->mail->Send()) {
            echo 'Enviado com sucesso !';
        } else {
            echo 'Erro ao enviar Email:' . $this->mail->ErrorInfo;
        }
    }
}
