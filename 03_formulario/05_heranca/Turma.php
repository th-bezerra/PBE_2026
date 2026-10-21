<?php
require_once "Aluno.php";
require_once "Professor.php";

class Turma {
    private $codigo;
    private $professor;
    private $alunos = [];

    public function __construct($codigo, Professor $professor) {
        $this->codigo = $codigo;
        $this->professor = $professor;
    }

    public function adicionarAluno(Aluno $aluno) {
        $this->alunos[] = $aluno;
    }

    public function listarAlunos() {
        echo "<h3>Alunos da Turma {$this->codigo}</h3>";
        foreach ($this->alunos as $aluno) {
            $aluno->exibirDados();
        }
    }

    public function exibirResumo() {
        echo "<h2>Turma {$this->codigo}</h2>";
        echo "Professor: " . $this->professor->getNome() . " ({$this->professor->getDisciplina()})<br><hr>";
    }
}
?>