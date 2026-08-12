<?php

$operacao = "+";
$numero1 = 9;
$numero2 = 8;
$valor = 0;

switch ($operacao){

    case "+":
        $valor = $numero1 + $numero2;
        echo "$valor";
        break;

    case "-":
        $valor = $numero1 - $numero2;
        echo "$valor";
        break;
    
    case "*":
        $valor = $numero1 * $numero2;
        echo "$valor";
        break;
    
    case "/":
        $valor = $numero1 / $numero2;
        echo "$valor";
        break;
    
    default:
        echo "operação invalída.";
        break;

}

?>
