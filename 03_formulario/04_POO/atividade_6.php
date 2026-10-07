<?php

class Aluno {

    public $nome;
    public $nota1;
    public $nota2;
    public $nota3;
    public $media;

    public function __construct($nome, $nota1, $nota2, $nota3) {
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->nota3 = $nota3;
        $this->media = ($this->nota1 + $this->nota2 + $this->nota3) / 3;
    }
    public function exibirInformacoes() {
        echo "Nome: $this->nome <br>, Nota 1: $this->nota1 <br>, Nota 2: $this->nota2 <br>, Nota 3: $this->nota3 <br>, Média: $this->media <br>";
    }
}


$aluno1 = new Aluno("Leonardo", 7, 8, 9);
echo "<pre>";
print_r($aluno1);
echo "<pre>";


$aluno2 = new Aluno("Davi", 4, 5, 9);
echo "<pre>";
print_r($aluno2);
echo "<pre>";
?>