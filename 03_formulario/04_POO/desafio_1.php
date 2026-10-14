<?php
class Pedido{
    private $cliente;
    private $valorItens;

    public function __construct($cliente, $valorItens = 0){
        $this->cliente = $cliente;
        $this->valorItens = $valorItens;
    }
    public function adicionarItem($valor){
        $this->valorItens += $valor;
    }
    public function getTotal(){
        return $this->valorItens;
    }
    public function exibirPedido(){
        echo "Pedido de $this->cliente com valor de: $this->valorItens";
        echo "total dos intens: $this->valorItens";
    }
    }


pedido = new Pedido("Leonardo");
pedido->adicionarItem(100);


class Notafiscal{
    private $totalpedido;
    private $imposto;
    private $totalPagar; // Total d pedido + porcentagem do imposto

    public function __construct($totalPedido, $imposto = 10){
        this->totalPedido = $totalPedido;
        this->imposto = $imposto;
        $this->totalPagar = 0;
    }

    public function calcularTotal(){
        $this->totalPagar = $this->totalPedido + ($this->totalPedido * ($this->imposto / 100));

    }

    public function exibirNota(){
        echo "Subtotal: $this->totalPedido <br>";
        echo "Imposto: $this->imposto <br>";
        echo "Total a Pagar: $this->totalPagar <br>";
            }
        }

$pedido = new Pedido("Leonardo");
$pedido->adicionarItem(50);
$pedido->adicionarItem(27);
echo $Pedido->exibitPedido();

$notaFiscal = new Notafiscal($pedido->getTotal(), 8);
$notaFiscal->calcularTotal();
$notaFiscal->exibirNota();

?>
