<?php

class Carro{
    private $modelo;
    private $velocidade;

    public function __construct($modelo){
        $this->modelo = $modelo;
        $this->velocidade = 0;
    }

    public function acelerar(){
        $this->velocidade += 10;
    }

    public function frear(){
        $this->velocidade -= 10;
    }

    public function verVelocidade(){
        echo $this->velocidade . " km/h<br>";
    }
}

$carro = new Carro("Fusca");

$carro->acelerar();
$carro->verVelocidade();

$carro->frear();
$carro->verVelocidade();

?>