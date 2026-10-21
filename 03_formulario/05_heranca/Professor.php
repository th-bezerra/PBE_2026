<?php
require_once "Pessoa.php";

class Professor extends Pessoa {
    private $disciplina;

    public function __construct($nome, $email, $disciplina) {
        parent::__construct($nome, $email);
        $this->disciplina = $disciplina;
    }

    public function getDisciplina() {
        return $this->disciplina;
    }

    public function exibirDados() {
        parent::exibirDados();
        echo "Disciplina: {$this->disciplina}<br><hr>";
    }
}
?>