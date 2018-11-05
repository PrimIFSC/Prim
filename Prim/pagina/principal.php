<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php 
        include '../cabe/cabecalho.php';
        ?>
        <form id="busc" action="../config/busca2.php" method="post">
<input type="search" name="busca">
<input type="submit" value="Buscar">
</form>
        <?PHP
        include '../usuario/listarContatos2.php';

        ?>

    </body>
</html>
