<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "db_php";
$porta = 3306;

$conexao = new mysqli($host, $usuario, $senha, $banco, $porta);

if ($conexao->connect_error) {
    die("Erro ao conectar com o banco de dados: " . $conexao->connect_error);
}

echo "Conexão com o banco de dados feita com sucesso!<br>";
?>