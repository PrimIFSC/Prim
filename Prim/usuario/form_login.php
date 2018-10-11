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
    <body><?php
        ?>
        <div class="row">
          <div class="col-md-6 col-md-offset 3">
            <center> 
        <div id="content">
        
    <center> 
        
            <form id="log" method="post" action="usuario/login.php" enctype="multipart/form-data">
                <div class="form-group">
                <h1><I>PRIM</i></h1><br><br><br>
                <label>E-mail:</label> 
                <p><input type="email" name="email" class="form-control" placeholder="E-mail"></p><br><br>
                <label>Senha:</label> 
                <p><input type="password" name="senha" class="form-control" placeholder="********"></p><br><br><br>
                <a href="usuario/form_cadastrar.php">Crie sua conta<br><br>
                    <p><input type="submit" value="Entrar" class="btn btn-primary btn-lg btn-block"></p>
                </div>
        </form>
    </center>
            </div>
            
          </div>
      </div>
    </body>
</html>
