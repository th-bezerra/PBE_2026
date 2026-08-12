<?php

$numeros = [10,4,5,3,1,9,4,6,7,3];
$maior = $numero[0];

foreach ($numeros as $numero ){
    if($numero > $maior){
        $maior = $numero;
    }
}
echo "O maior número é: ". $maior;
?>  