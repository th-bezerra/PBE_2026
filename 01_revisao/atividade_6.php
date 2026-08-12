<?php

$aluno = [
    "Rafael" => 8.0,
    "Felipe" =>7.0,
    "Rodrigo" => 10.0,
    "Jonas" => 2.0,
    "Daniel" => 7.0
];

$media = 0;

foreach ($aluno as $nome => $nota){
    echo" O aluno $nome, tirou a nota $media <br>";
    $media += $nota;
}

$media = $media / 6;
echo "A media da turma é: $media";

?>