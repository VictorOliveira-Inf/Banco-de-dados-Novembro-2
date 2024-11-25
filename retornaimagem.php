<?php

require "bancodedados.php";

$diretorio = "imagens/";
$imagem = $_FILES["imagem"]["name"];
$caminhocompleto = $diretorio.$imagem;
$legenda = $_POST['legenda'];

$salvarimagem = move_uploaded_file($_FILES["imagem"]["tmp_name"], $caminhocompleto);

$inserir = mysqli_query($conexao, "INSERT INTO tblimagem(caminhoimagem, legenda) VALUES ('$caminhocompleto','$legenda')");

echo "<script>alert('Imagem inserida com sucesso!');</script>";
echo "<script>document.location.href='index.html';</script>";

?>