<?php

require "bancodedados.php";

$selecionar = mysqli_query($conexao,"SELECT * FROM tblimagem");

while ($busca = mysqli_fetch_array ($selecionar)){

$caminhoimagem = $busca['caminhoimagem'];
$legenda = $busca['legenda'];

echo '<img src="'.$caminhoimagem.'" width="200px"/><br/>
Legenda: '.$legenda.' <br/> <br/>';


}


?>
<p><a href="index.html">Voltar</a></p>