<?php
include '../cabe/cabecalho.php';

?>
<h2 id="config">Personalizar</h2>

<h4>Alterar fundo</h4>
<br>

<div id="per">
<a href="galeria.php"><img src="../img/galeria.jpg" height="40"><br>Galeria</a><br>
<a href="cor.php"><img src="../img/cor.png" height="40"><br>Cores</a>
</div>

<br>
<h4>Visibilidade</h4>
<br>

<label for="visEmail"> Quem pode ver meu email:</label>
<select name="emailOpt">
  <option value="meusContatos" selected>Meus contatos</option>
  <option value="todos">Todos</option>
  <option value="ninguem">Ninguém</option>
</select>
<br><br>

<label for="visFoto"> Quem pode ver minha foto:</label>
<select name="fotoOpt">
  <option value="meusContatos" selected>Meus contatos</option>
  <option value="todos">Todos</option>
  <option value="ninguem">Ninguém</option>
</select>

<br><br>
<h4>Notificações</h4>
<br>

<label for="notificacoes"> Som de notificaçao:</label>
<select name="somOpt">
  <option value="nenhum" selected>Nenhum</option>
  <option value="ping">Ping</option>
  <option value="procyon">Procyon</option>
  <option value="soft">Soft</option>
  <option value="spica">Spica</option>
</select>
<br><br>

<input id="ok" type="submit" value="Ok">