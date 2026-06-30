<?php
include_once(__DIR__ . "/conexao.php");


$operacoes = [
    [120,100],
    [80,40],
    [20,10]
];
foreach ($operacoes as $operacao) {
    $numero1 = $operacao[0];
    $numero2 = $operacao[1];
    $resultado = $numero1 - $numero2;

    $sql = "INSERT INTO calculo (numero1, numero2, resultado) VALUES ($numero1, $numero2, $resultado)";

    if ($conexao->query($sql)) {
        echo "Dados salvos com sucesso!<br>";
    } else {
        echo "Erro ao salvar os dados: " . $conexao->error . "<br>";
    }
}
?>