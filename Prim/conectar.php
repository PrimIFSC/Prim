<?php

//$conexao = mysqli_connect("localhost", "root", "ifsc", "ifsc", "3306");
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "ifsc");

$conexao = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);