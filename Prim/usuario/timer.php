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
            <?php
       //include '../cabe/cabecalho.php';
            
       ?>
        <link rel="stylesheet" href="../css/style.css">
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="plugin.js"></script>
         <script src="script.js"></script> 
    </head>
    <body>
       <div class="my-progress-bar"></div>
       <script type="text/javascript">
           $(document).ready(function(){
           var progress_circle = $(".my-progress-bar").circularProgress({
               line_width: 15,
               color: "#ff",
               starting_position: 0,
               percent: 0,
}).circularProgress('animate', 100, <?=$tempo?>);
})

       </script>
       </div>
    </body>
</html>
