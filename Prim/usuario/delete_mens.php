 <?php
        $query = "delete from mensagem where id = $linha[id]";
        mysqli_query($conexao, $query);
        ?>

