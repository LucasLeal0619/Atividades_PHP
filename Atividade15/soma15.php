<?php
include_once(__DIR__ . "/conexao15.php");

    $numero1 = $_POST['num1'];
    $numero2 = $_POST['num2'];
    $resultado = $numero1 + $numero2; 

$sql = "INSERT INTO calculo (numero1, numero2, resultado) VALUES ($numero1, $numero2, $resultado)";

if ($conexao->query($sql)) {
    echo "<br> Dados salvos com sucesso!";
} else {
    echo "<br> Erro ao salvar os dados: " . $conexao->error;
}
?>