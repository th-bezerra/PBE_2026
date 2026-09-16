<?php
$numero_1 = $_POST['numero_1'];
$numero_2 = $_POST['numero_2'];
$operacao = $_POST['operacao'];

echo $numero_1 . "<br>";
echo $numero_2 . "<br>";
echo $operacao . "<br>";

if($operacao == "+"){
    echo $numero_1 + $numero_2;
}
elseif($operacao == "-"){
    echo $numero_1 - $numero_2;
}
elseif($operacao == "*"){
    echo $numero_1 * $numero_2;
}else{
    echo $numero_1 / $numero_2;
}
?>