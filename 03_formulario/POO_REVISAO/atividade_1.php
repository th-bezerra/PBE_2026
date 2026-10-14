<?php

class Aluno
{
    private $nome;
    private $nota;

    public function __construct($nome, $nota = 0)
    {
        $this->nome = $nome;
        $this->nota = $nota;
    }

    public function getStatus()
    {
        if ($this->nota >= 6) {
            return "Aprovado";
        }
        return "Reprovado";
    }
}

$aluno1 = new Aluno("Maria", 8);
$aluno2 = new Aluno("Mariana");

echo "<pre>";
print_r($aluno1);
print_r($aluno2);
echo "</pre>";