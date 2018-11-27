<?php

include '../usuario/autenticar.php';

deslogar();
header("Location: ".$url."index.php");

