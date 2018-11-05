<?php
include '../conectar.php';
include '../usuario/autenticar.php';

$arquivo = $_POST['arquivo'];

if (isset($_FILES['arquivo'])){
        $extensao = strtolower( substr($_FILES['arquivo'] ['name'], -4));
        $novo_nome = md5(time()) . $extensao;
        $diretorio = "../upload/";
        
        $_UP['tamanho'] = 1024*1024*100;
        
        $_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif');
        
        $_UP['renomeia'] = false;
        
        move_uploaded_file($_FILES['arquivo'] ['tmp_name'], $diretorio.$novo_nome);
        
}