<?php

class ClasseAula {

    public $disciplina;
    public $professor;
    public $duracao;
    public $numero_sala;
    public $bloco;

    function exibirInformacoes() {
        echo "Disciplina: $this->disciplina <br>";
        echo "Professor: $this->professor <br>";
        echo "Duração: $this->duracao <br>";
        echo "Número da Sala: $this->numero_sala <br>";
        echo "Bloco: $this->bloco <br>";
    }

    function trocarProfessor($nome_professor) {
        $this->professor = $nome_professor;
        echo "O novo professor é $this->professor <br>";
    }

    function alterarLocal($novo_bloco, $nova_numero_sala) {
        $this->bloco = $novo_bloco;
        $this->numero_sala = $nova_numero_sala;

        echo "O novo local é $this->bloco $this->numero_sala <br>";
    }
}



$aula1 = new ClasseAula();

$aula1->disciplina = "Matemática";
$aula1->professor = "Leonardo";
$aula1->duracao = "4";
$aula1->numero_sala = "2";
$aula1->bloco = "Anexo";

$aula1->exibirInformacoes();

echo "<hr>";

$aula1->trocarProfessor("Gabriel");

echo "<hr>";

$aula1->alterarLocal("B", "10");

echo "<hr>";

$aula1->exibirInformacoes();

?>