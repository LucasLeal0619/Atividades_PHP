<?php
include_once(__DIR__ . "/conexao16.php");

    $numero1 = $_POST['num1'];
    $numero2 = $_POST['num2'];
    $numero3 = $_POST['num3'];
    $resultado = $numero1 * $numero2 * $numero3;

$sql = "INSERT INTO multi (numero1, numero2, numero3, resultado) VALUES ($numero1, $numero2, $numero3, $resultado)";

if ($conexao->query($sql)) {
    echo "<br> Dados salvos com sucesso!";
} else {
    echo "<br> Erro ao salvar os dados: " . $conexao->error;
}

echo "<br> <br> Resultado da multiplicação: " . $resultado;
?>