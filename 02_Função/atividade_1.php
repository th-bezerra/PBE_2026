<?php

function verificarMaioridade($idade){
    if($idade >= 18){
        return"Maior Idade";
    }else{
        return"Menor Idade";
    }
}
$idade1 = 15;
$idade2 = 18;
$idade3 = 25;

$resultado = verificarMaioridade($idade1);
echo "A idade $idade1 é $resultado <br>";

$resultado = verificarMaioridade($idade2);
echo "A idade $idade2 é $resultado <br>";

$resultado = verificarMaioridade($idade3);
echo "A idade $idade3 é $resultado <br>";

?>