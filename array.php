<?php 

$aprovado = 0;
$candidatos = [
    
    (object)["Joao", "nota" => 80],
    (object)["Maria", "nota" => 90],
    (object)["Pedro", "nota" => 85], 
    (object)["Lucas", "nota" => 70], 
    (object)["Rafael", "nota" => 50] 

]; 

foreach ($candidatos as $candidatos) {
    if($candidatos -> nota >= 80){
        
    $aprovado++;
    }
}
echo "O número de candidatos aprovados é: $aprovado";

?>