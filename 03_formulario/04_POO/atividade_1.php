<?php
class Celular {
    // Atributos
    public $marca;
    public $modelo;
    public $cor;
    public $bateria;
    public $ligado;

    // Métodos
    function ligar() {
        $this->ligado = true;
        echo "O celular está ligado.";
    }

    function desligar() {
        $this->ligado = false;
        echo "O celular foi desligado. <br>";
    }   
    function usar($consumir){
        $this->bateria = $this->bateria - $consumir;
        if ($this->bateria < 0) {
            $this->bateria = 0;
            echo "A bateria foi consumida em $consumir <br>";
            echo "Sobrando um total de $this->bateria";
        }
    }
    function carregar($carga){
        $this->bateria = $this->bateria + $carga;
        if ($this->bateria > 100) {
            $this->bateria = 100;
            echo "A bateria foi carregada em $carga <br>";
            echo "Aumentando para $this->bateria <br>";
        }
    }
}

// Objetos
$celular1 = new Celular();
$celular1->marca = "Xiaomi";
$celular1->modelo = "Redmi Note 10";
$celular1->cor = "Preto";
$celular1->bateria = 67;
$celular1->ligado = true;


echo "Marca: $celular1->marca <br>";
echo "Modelo: $celular1->modelo <br>";
echo "Cor: $celular1->cor <br>";
echo "Bateria: $celular1->bateria <br>";
echo "Ligado:  $celular1->ligado <br>";


$celular1->carregar(33);
$celular1->carregar(12);
$celular1->usar(25);
$celular1->desligar();

echo "------------------------------------------------<br>";

$celular2 = new Celular();
$celular2->marca = "Sansung";
$celular2->modelo = "Sansung Galaxy S21";
$celular2->cor = "Preto";
$celular2->bateria = 50;
$celular2->ligado = true;


echo "Marca: $celular2->marca <br>";
echo "Modelo: $celular2->modelo <br>";
echo "Cor: $celular2->cor <br>";
echo "Bateria: $celular2->bateria <br>";
echo "Ligado:  $celular2->ligado <br>";


$celular2->carregar(33);
$celular2->carregar(12);
$celular2->usar(25);
$celular2->desligar();
?>