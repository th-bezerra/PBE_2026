<?php
class ContaBancaria {
    public $titular;
    public $saldo;

    public function __construct($titular, $saldoInicial) {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
        }
    }
    public function sacar($valor) {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
        }
    }
    public function exibirSaldo() {
        $saldoFormatado = number_format($this->saldo, 2, ',', '.');
        echo "Titular: " . $this->titular . " - Saldo atual: R$ " . $saldoFormatado . "<br>";
    }
}

$minhaConta = new ContaBancaria("Leonardo", 500.00);

$minhaConta->depositar(200.00);

$minhaConta->sacar(100.00);

$minhaConta->exibirSaldo();


?>