<?php 

class pedido{
    public $numero;
    public $cliente;
    public $valor;
    public $status;

    function adicionar($valor){
        if($this->status == "Aguardando"){
            $this->valor = $this->valor + $valor;
        }else{
            echo "Não é possível adicionar nada ao pedido.;
                O pedido está $this->status <br>";
        }  
    }
    function cancelar(){
        $this->status = "Cancelado";
        echo "Status alterado para $this->status <br>";
    }
    function finalizar(){
        $this->status = "Finalizado";
        echo "Status alterado para $this->status <br>";
    }

    function exibirResumo(){
        echo "Número do pedido: $this->numero <br>";
        echo "Cliente: $this->cliente <br>";
        echo "Valor: R$ $this->valor <br>";
        echo "Status: R$ $this->status <br>";
    }

}


$pedido = new pedido();
$pedido->numero = 67;
$pedido->cliente = "João";
$pedido->valor = 0;
$pedido->status = "Aguardando";

$pedido->exibirResumo();
echo "<hr>";
$pedido->adicionarItem(50);
$pedido->adicionarItem(22);
$pedido->exibirResumo();
echo "<hr>";
$pedido->finalizar();
$pedido->exibirResumo();