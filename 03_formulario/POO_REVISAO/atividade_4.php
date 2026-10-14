<?php

class Paciente{
    private $nome;
    private $idade;
    private $peso;
    private $altura;

    public function __construct($nome, $idade, $peso, $altura){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->peso = $peso;
        $this->altura = $altura;
    }

    public function calcularIMC(){
        return $this->peso / ($this->altura * $this->altura);
    }

    public function classificarIMC(){
        $imc = $this->calcularIMC();

        if ($imc < 18.5) {
            return "Baixo";
        } elseif ($imc < 25) {
            return "Normal";
        } elseif ($imc < 30) {
            return "Sobrepeso";
        }
        return "Obesidade";
    }

    public function exibirFicha(){
        echo "Paciente: " . $this->nome . "<br>";
        echo "Idade: " . $this->idade . " anos<br>";
        echo "IMC: " . number_format($this->calcularIMC(), 2) . "<br>";
        echo "Classificação: " . $this->classificarIMC() . "<br>";
    }
}

$paciente = new Paciente("Gabriel", 30, 69, 1.70);
$paciente->exibirFicha();

?>