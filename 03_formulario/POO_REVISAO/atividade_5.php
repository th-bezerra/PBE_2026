<?php

class Turma{
    private $nome;
    private $professor;
    private $qtdAlunos;
    private $capacidade;

    public function __construct($nome, $professor, $qtdAlunos, $capacidade){
        $this->nome = $nome
        $this->professor = $professor
        $this->qtdAlunos = $qtdAlunos
        $this->capacidade = $capacidade
    }
}