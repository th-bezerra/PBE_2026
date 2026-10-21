<?php
require_once "Pessoa.php";

class Aluno extends Pessoa {
    private $matricula;
    private $notas = [];

    public function __construct($nome, $email, $matricula) {
        parent::__construct($nome, $email);
        $this->matricula = $matricula;
    }

    public function adicionarNota($nota) {
        $this->notas[] = $nota;
    }

    public function calcularMedia() {
        if (count($this->notas) === 0) return 0;
        return array_sum($this->notas) / count($this->notas);
    }

    public function verificarSituacao() {
        return $this->calcularMedia() >= 7 ? "Aprovado" : "Reprovado";
    }

    public function exibirDados() {
        parent::exibirDados();
        echo "Matrícula: {$this->matricula}<br>";
        echo "Média: " . number_format($this->calcularMedia(), 2) . "<br>";
        echo "Situação: " . $this->verificarSituacao() . "<br><hr>";
    }
}
?>