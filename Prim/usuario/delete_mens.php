<?php

$id = $_POST['id'];

        $query = "delete from mensagem where id = $id";
        mysqli_query($conexao, $query);
        ?>

