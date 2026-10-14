<?php

class Funcionario{
    public $nome;
    public $salario;

    public function __construct($nome, $salario) {
        if($salario < 0){
            $this->salario = 1000;
        }
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function aumentarSalario($percentual) {
        if ($percentual > 0 && $percentual <= 10) {
                $this->salario += $this->salario * ($percentual / 100);
        }
    }

    public function exibirInformacoes() {
        echo "Funcionário: " . $this->nome . " - Salário: R$ " . number_format($this->salario, 2, ',', '.') . "<br>";
    }
}

$func = new Funcionario("Leonardo", 3000);
$func-> aumentarSalario(10);
$func->exibirInformacoes();

?>