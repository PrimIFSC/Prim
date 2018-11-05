<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * 
 * @param $username será o identificador da seção
 */

function logar($email, $id, $nome){
    $_SESSION['email'] = $email;
    $_SESSION['id'] = $id;
    $_SESSION['nome'] = $nome;
    iniciarTempoSessao();
}

function deslogar(){
    session_destroy();
}

function sessaoExpirada() {
    if($_SESSION['tempo']< time()){
        //está dentro do tempo da sessão
        return true;
    }else{
        //reiniciar sessão
        iniciarTempoSessao();
        return false;
    }
}

function autenticar() {
    //se não está logado ou sessão expirada
    if(!estaLogado() || sessaoExpirada()){
        deslogar();
        header('Location: form_login.php');
    }else{
        return true;
    }
}

function estaLogado(){
    return isset($_SESSION['email']);
}

function getUsername() {
    return $_SESSION['email'];
}

function iniciarTempoSessao() {
    $_SESSION['tempo'] = time() + 10;
}

