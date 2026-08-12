<?php

$funcionarios = [
    ["nome" => "Carlos", "cargo" => "Programador", "salario" => 500],
    ["nome" => "Ana", "cargo" => "Designer", "salario" => 3500],
    ["nome" => "Pedro", "cargo" => "Analista", "salario" => 3000],
    ["nome" => "Marina", "cargo" => "Gerente", "salario" => 1500],
    ["nome" => "João", "cargo" => "Suporte", "salario" => 1000],
    ["nome" => "Julia", "cargo" => "Estagiária", "salario" => 2000]
];

$quantidade = count($funcionarios);
$somaSalarios = 0;

foreach ($funcionarios as $funcionario){
    echo "Nome: " . $funcionario ["nome"] . "<br>" . "<br>";
    echo "Cargo: " . $funcionario ["cargo"] . "<br>" . "<br>";
    echo "Salário: " . $funcionario ["salario"] . "<br>" . "<br>"; 
    echo "<br> -------------------<br>";
    $somaSalarios += $funcionario ['salario'];
}
echo "-------------------------------- <br>";

echo "Quantidade de funcionarios: ". $quantidade;
echo "<br>";
echo "A soma dos salários é: ". $somaSalarios;

