<?php

class Carro{
    public $modelo;
    public $consumo;
    public $tanque;

    public function __construct($modelo, $consumo, $tanque) {
        $this->modelo = $modelo;
        $this->consumo = $consumo;
        $this->tanque = $tanque;
    }
    public function tanqueInicial($tanque) {
        if($tanque <= 0) {
            $this->tanque = $this->tanque = 0;

        }
    
    }
    public function abastecer($litros) {
        $this->tanque += $litros;
        echo "Abastecido com $litros litros tanque atual: $this->tanque litros <br>";
    }
    public function dirigir($km) {
        $consumoTotal = $distancia / $this->consumo;
        if ($consumoTotal <= $this->tanque) {
            $this->tanque -= $consumoTotal;
            echo "Dirigido por $distancia km tanque atual: $this->tanque litros <br>";
        } else {
            echo "Tanque insuficiente para dirigir $distancia km tanque atual: $this->tanque litros <br>";
        }
    }
    public function exibirInfo() {
        echo "Modelo: $this->modelo |";
        echo "Consumo: $this->consumo km/l |";
        echo "Tanque: $this->tanque litros <br>";
        echo "O carro $this->modelo percorreu " . ($this->consumo * $this->tanque) " e consumiu $this->tanque <br>";
        echo "Abastecidos $this->tanque <br>";
        echo "Modelo: $this->modelo | Consumo: $this->consumo | Tanque: $this->tanque"
    }
}


$carro = new Carro("Honda Civic", 12, 20);
$carro->exibirInfo();
$carro->dirigir(60);
$carro->abastecer(10);
$carro->exibirInfo();

?>