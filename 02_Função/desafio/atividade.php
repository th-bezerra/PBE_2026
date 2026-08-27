<?php

require_once "funcao.php";

$pedido = calcularPedido("Teclado", 100, 5, 10, 20);

echo "Produto: " . $pedido["nomeProduto"] . "<br>";
echo "Subtotal: R$ " . $pedido["subtotal"] . "<br>";
echo "Desconto: R$ " . $pedido["valorDesconto"] . "<br>";
echo "Imposto: R$ " . $pedido["valorImposto"] . "<br>";
echo "Total final: R$ " . $pedido["totalFinal"] . "<br>";
// invocando 

$TotalComFrete = CalculoFrete($pedido['totalFinal']);
echo "Total com Frete: " . $TotalComFrete;
?>