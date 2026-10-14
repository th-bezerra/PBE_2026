<?php

class Produto{
    public $nome;
    public $preco;
    public $estoque;

    public function __construct($nome, $preco, $estoque) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }

    public function vender($quantidade) {
        if ($quantidade <= $this->estoque) {
            $this->estoque -= $quantidade;
            echo "Venda de $quantidade unidade(s) de $this->nome Realizada!<br> <br>";
        } else {
            echo "Estoque insuficiente para vender $quantidade unidade(s) de $this->nome!<br>";
        }
    }

    public function reajustarPreco($percentual) {
            $this->preco += $this->preco * ($percentual / 100);
            echo "Preço de $this->nome reajustado para R$ " . number_format($this->preco, 2, ',', '.') . "<br>";
        }

    public function exibirInformacoes() {
        echo "$this->nome --> R$ " . number_format($this->preco, 2, ',', '.') . " | Estoque: $this->estoque unidade(s)";
    }
}

$produto1 = new Produto("Teclado Gamer", 275.00, 10 );
"<br>";
$produto1->vender(10);

$produto1->exibirInformacoes();

$produto2 = new Produto("Mouse Gamer", 100.00, 5);

$produto2->vender(4);

$produto2->exibirInformacoes();

?>