<?php
include '../pagina/principal.php';
?>
<div id="edit">

    <h3>Adicionar contato</h3><br>
<form id="busc2" action="<?=$url?>config/busca.php" method="post">
        <input type="text" class="w3-bar-item w3-input w3-white w3-mobile" placeholder="Search.." name="busca">
        <label for="submit"><a class="w3-bar-item w3-button" style="padding: 10px;"><i class="fa fa-search"></i></a></label><input type="submit" value="" id="submit" name="submit" hidden="">
    </form>
    <br>

<?php

include '../usuario/listar.php';
?>
</div>


