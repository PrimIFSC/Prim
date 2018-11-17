<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!--<title>Bootstrap 101 Template</title>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <link href="css/style.css" rel="stylesheet"/>
    <link type="text/css" rel="stylesheet" href="../css/style.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   
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
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    </body>
</html>
