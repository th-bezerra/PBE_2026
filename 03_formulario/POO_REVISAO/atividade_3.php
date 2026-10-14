<?php

class Filme{
    private $titulo;
    private $genero;
    private $duracao;
    private $assistido;

    public function __construct($titulo, $genero, $duracao){
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->duracao = $duracao;
        $this->assistido = false;
    }

    public function marcarComoAssistido(){
        $this->assistido = true;
    }

    public function exibirInformacoes(){
        echo "Título: " . $this->titulo . "<br>";
        echo "Gênero: " . $this->genero . "<br>";
        echo "Duração: " . $this->duracao . " min<br>";
        echo "Assistido: " . ($this->assistido ? "Sim" : "Não") . "<br>";
        echo $this->foiAssistido() . "<br>";
    }

    public function foiAssistido(){
        if ($this->assistido) {
            return "Você já assistiu.";
        }
        return "Você ainda não assistiu.";
    }
}

$filme1 = new Filme("Matrix", "Ficção", 145);
$filme2 = new Filme("Harry Potter", "Ficção", 200);

$filme2->marcarComoAssistido();

$filme1->exibirInformacoes();
echo "---------------------------<br>";
$filme2->exibirInformacoes();

?>