<?php

$a = 1;
$b = -5;
$c = 6;

$delta = ($b ** 2) - (4 * $a * $c );

$x1 = (-$b + sqrt($delta)) / (2 * $a);
$x2 = (-$b - sqrt($delta)) / (2 * $a);

echo "Valor de x1: " . $x1 . "<br>";
echo "Valor de x2: " . $x2;
?>