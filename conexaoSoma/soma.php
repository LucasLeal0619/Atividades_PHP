<?php
include_once(__DIR__ . "/conexaoSoma.php");

$numero1 = 15;
$numero2 = 10;
$numero3 = 5;
$resultado = $numero1 + $numero2 + $numero3;

$sql = "INSERT INTO calculo (numero1, numero2, numero3, resultado) VALUES ($numero1, $numero2, $numero3, $resultado)";

if ($conexao->query($sql)) {
    echo "<br> Dados salvos com sucesso!";
} else {
    echo "<br> Erro ao salvar os dados: " . $conexao->error;
}
?>