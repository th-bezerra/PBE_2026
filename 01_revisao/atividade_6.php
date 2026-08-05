<?php
$notas_alunos = [
    gabriela => 5.0
    joao => 8.5
    rafael => 9.1
    joana => 5.0

]

media = 0;
foreach ($notas_alunos, as $nome => $nota){ 
    echo ("O aluno $nome tirou a nota $media  <br>")
}
$media = $media + $notas_alunos /4
echo $media