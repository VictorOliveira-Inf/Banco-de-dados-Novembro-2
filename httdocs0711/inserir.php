<?php
require "bancodedados.php";

$nome = $_POST ['nome'];
$telefone = $_POST['telefone'];

$inserir ="INSERT INTO tblcadastro (nome, telefone) VALUES
 ('$nome','$telefone')";

$sql = $pdo -> prepare($inserir);

$sql -> execute();

$linhasafetadas = $sql -> rowCount();
echo "Foi ou foram inserida(s)".$linhasafetadas." linha(s)<br/>
<a href='index.html'>Voltar</a>";















?>