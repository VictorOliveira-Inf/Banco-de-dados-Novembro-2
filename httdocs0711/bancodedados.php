<?php

$servidor = "mysql:host=localhost;dbname=cadastro";
$login = "root";
$senha = "";

try{

$pdo = new PDO ($servidor,$login,$senha);

$pdo -> setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Conexão estabelecida com sucesso";
}
catch (PDOException $e){
echo "Erro ao estabelecer conexão:" . $e -> getMessage();

}

?>