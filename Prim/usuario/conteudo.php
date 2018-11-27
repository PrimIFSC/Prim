<?php
include './autenticar.php';
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
    if (isset($_FILES['arquivo'] ['name'] )){
        $extensao = strtolower(end(explode('.', $_FILES['arquivo'] ['name'])));
        $novo_nome = md5(time()) . $extensao;
        $diretorio = "../upload/";
        move_uploaded_file($_FILES['arquivo'] ['tmp_name'], $diretorio.$novo_nome);
        $_UP['tamanho'] = 1024*1024*100;
        
        $_UP['extensoes_img'] = array('png', 'jpg', 'jpeg', 'gif');
        
        $_UP['extensoes_aud'] = array('mp3', 'wma', 'aac', 'wav');
        
        $_UP['extensoes_vid'] = array('mp4', 'mpeg', 'mov', 'avi', 'mkv', '3gpp');
        
        $_UP['renomeia'] = false;
        
        
        if (array_search($extensao, $_UP['extensoes_vid']) != false){
        $sql_up = "insert into mensagem (usuario_id, contato_id, hora, conteudo, tipo, tempo) values ('$id_usuario', '$id_contato', NOW(), '$novo_nome', 'v', '$tempo')";    
        mysqli_query($conexao, $sql_up);
        
        }else
        if (array_search($extensao, $_UP['extensoes_aud']) != false){
        $sql_up2 = "insert into mensagem (usuario_id, contato_id, hora, conteudo, tipo, tempo) values ('$id_usuario', '$id_contato', NOW(), '$novo_nome', 'a', '$tempo')";
        mysqli_query($conexao, $sql_up2);
        
        }else
        if (array_search($extensao, $_UP['extensoes_img']) != false){
        $sql_up3 = "insert into mensagem (usuario_id, contato_id, hora, conteudo, tipo, tempo) values ('$id_usuario', '$id_contato', NOW(), '$novo_nome', 'i', '$tempo')";
        mysqli_query($conexao, $sql_up3); 
        }
        else{
            echo 'Não foi possível fazer o upload';
        }
        
    }
$sql2 = "insert into notificacoes (usuario_id, contato_id) values ($id_usuario, $id_contato)";
mysqli_query($conexao, $sql2);

//                  if ($msg!=false){
//                    echo "$msg";  
//                  }
  


//echo $id_usuario;
//echo $id_contato;
//echo $tipo;

//echo $mensagem;

header("Location: ".$url."pagina/principal.php");
