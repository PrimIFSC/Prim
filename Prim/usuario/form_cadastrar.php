<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="../css/style.css">
        <title></title>
    </head>
    <body>
        <?php
        ?>
    <center>
        <form id="log" method="post" action="cadastrar.php">
            <h1><I>PRIM</i></h1><br><br><br>
            Nome: <input type="text" name="nome" required><br><br>
            E-mail: <input type="email" name="email" required><br><br>
            Senha: <input type="password" name="senha" required><br><br>
            Repetir senha: <input type="password" name="repSenha" required><br><br><br>
            <input type="submit" value="Concluir" required>
        </form>
    </center>
    </body>
</html>
