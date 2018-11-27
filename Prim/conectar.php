<?php

// Desenvolvimento
 $url = "http://localhost/Prim/";
// $username = "root";
// $password = "ifsc";
// $dbname = "ifsc";
// Produção
//$url = "http://prim.freetzi.com/";
//$username = "1124810";
//$password = "prim123";
//$dbname = "1124810";

//$conexao = mysqli_connect("localhost", "root", "ifsc", "ifsc", "3306");
//define("DB_SERVER", "localhost");
//define("DB_USER", "root");
//define("DB_PASSWORD", "");
//define("DB_DATABASE", "ifsc");
//
//$conexao = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);

$conexao = mysqli_connect("localhost", "root", "", "ifsc", "3306");

//$conexao = mysqli_connect($url , $username, $password, $dbname);

//data_default_timezone_set('America/Santa_Catarina');
//$globalData = date("d/m/Y");
//$globalHora = date("H:i");

