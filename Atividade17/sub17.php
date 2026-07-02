<?php
include_once(__DIR__ . "/conexao17.php");

    $numero1 = $_POST['num1'];
    $numero2 = $_POST['num2'];
    $numero3 = $_POST['num3'];
    $numero4 = $_POST['num4'];
    $resultado = $numero1 - $numero2 - $numero3 - $numero4;

$sql = "INSERT INTO sub (numero1, numero2, numero3, numero4, resultado) VALUES ($numero1, $numero2, $numero3, $numero4, $resultado)";

if ($conexao->query($sql)) {
    echo "<br> Dados salvos com sucesso!";
} else {
    echo "<br> Erro ao salvar os dados: " . $conexao->error;
}

echo "<br> <br> Resultado da subtração: " . $resultado;
?>