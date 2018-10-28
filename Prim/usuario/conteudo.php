<?php
session_start();
include '../conectar.php';

$id_usuario = $_SESSION['id'];
$id_contato = $_POST['id'];
$mensagem = $_POST['mensagem'];
//$tipo = $_POST['tipo'];
$tempo = $_POST['tempo'];
$arquivo = $_POST['arquivo'];
//echo $tempo;
$msg = false;

//    if ($tipo == null){
//    $tipo = "t";
    
//    } 
if ($mensagem == !null){
    $sql = "insert into mensagem (usuario_id, contato_id, hora, conteudo, tipo, tempo) values ('$id_usuario', '$id_contato', NOW(), '$mensagem', 't', '$tempo')";

    mysqli_query($conexao, $sql);
} else 
    if (isset($_FILES['arquivo'])){
        $extensao = strtolower( substr($_FILES['arquivo'] ['name'], -4));
        $novo_nome = md5(time()) . $extensao;
        $diretorio = "../upload/";
        
        $_UP['tamanho'] = 1024*1024*100;
        
        $_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif');
        
        $_UP['renomeia'] = false;
        
        move_uploaded_file($_FILES['arquivo'] ['tmp_name'], $diretorio.$novo_nome);
        
        
        $sql_up = "insert into mensagem (usuario_id, contato_id, hora, conteudo, tempo) values ('$id_usuario', '$id_contato', NOW(), '$novo_nome', '$tempo')";
        
        if(mysqli_query($conexao, $sql_up))
            $msg = "Arquivo enviado com sucesso!";
        else
             $msg = "Falha ao enviar arquivo";        
            
        }
        

//                  if ($msg!=false){
//                    echo "$msg";  
//                  }
  


//echo $id_usuario;
//echo $id_contato;
//echo $tipo;



header("Location: ../pagina/principal.php");
