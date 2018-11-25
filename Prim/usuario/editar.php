<?php
include '../conectar.php';
include './autenticar.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$arquivo = $_POST['arquivo'];

$sql = "update usuario set nome='$nome', email='$email' where id = $id";

mysqli_query($conexao, $sql);

if (isset($_FILES['arquivo'] ['name'] )){
        $extensao = strtolower(end(explode('.', $_FILES['arquivo'] ['name'])));
        $novo_nome = md5(time()) . $extensao;
        $diretorio = "../upload/";
        move_uploaded_file($_FILES['arquivo'] ['tmp_name'], $diretorio.$novo_nome);
        $_UP['tamanho'] = 1024*1024*100;
        
        $_UP['extensoes_img'] = array('png', 'jpg', 'jpeg', 'gif');
        
        $_UP['renomeia'] = false;
        
        
        if (array_search($extensao, $_UP['extensoes_vid']) != false){
            $sql2 = "insert into fundo (usuario_id, foto) values ($id, '$novo_nome')";
            mysqli_query($conexao, $sql2);
        }
}



header('Location: ../pagina/principal.php');


