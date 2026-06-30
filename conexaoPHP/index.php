<?php
include_once(__DIR__ . "/conexao.php");

$numero1 = 20;
$numero2 = 21;
$resultado = $numero1 + $numero2;

$sql = "INSERT INTO calculo (numero1, numero2, resultado) VALUES ($numero1, $numero2, $resultado)";

if ($conexao->query($sql)) {
    echo "Dados salvos com sucesso!";
} else {
    echo "Erro ao salvar os dados: " . $conexao->error;
}
?>