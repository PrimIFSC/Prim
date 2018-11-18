<?php
include '../conectar.php';
include '../usuario/autenticar.php';

$fundo = $_POST['fundo'];

if (isset($_FILES['fundo'])){
        $extensao = strtolower( substr($_FILES['fundo'] ['name'], -4));
        $novo_nome = md5(time()) . $extensao;
        $diretorio = "../upload/";
        
        $_UP['tamanho'] = 1024*1024*100;
        
        $_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif');
        
        $_UP['renomeia'] = false;
        
        move_uploaded_file($_FILES['fundo'] ['tmp_name'], $diretorio.$novo_nome);
        
}