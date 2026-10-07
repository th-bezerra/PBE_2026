<?php
class ContaBancaria {
    public $titular;
    public $numero;
    public $saldo;
    public $tipo;

    function depositar($valor) {
        $this->saldo = $this->saldo + $valor;
    echo "O saldo aumentou para R$ $this->saldo <br> ";
    }

    function sacar($valor) {
            $this->saldo = $this->saldo - $valor;
            echo "O saldo resultou em R$ $this->saldo <br>";
            echo "<br>";
        }
    }

    function consultarSaldo() {
        echo "o saldo atual é de: R$ $this->saldo <br>";
    }

$conta1 = new ContaBancaria();
$conta1->titular = "Leonardo Evangelista";
$conta1->numero = "12345-6";
$conta1->saldo = 67;
$conta1->tipo = "Corrente";

$conta1 ->consultarSaldo();
$conta1->sacar(200);
$conta1 ->consultarSaldo();
echo "br Conta 02 <br>";
$conta2 = new ContaBancaria();
$conta2->titular = "Cristiano Ronaldo";
$conta2->numero = "312123";
$conta2->saldo = 5000;
$conta2->tipo = "c/c";
$conta2 ->consultarSaldo();
?>