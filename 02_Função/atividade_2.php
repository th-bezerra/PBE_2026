<?php
$preco_produto = 20;
$qtd_comprada = 10;
$percentual_desconto = 10;

function calcularPrecoFinal($preco, $qtd, $percentual){
    $desconto = ($preco * $qtd)/100;
    $compra = $preco * $qtd = $desconto;
    return $compra;
}
    $resultado = calcularPrecoFinal($preco_produto,$qtd_comprada,$percentual_desconto);
echo"Preço : $preco_produto <br>";
echo"Quantidade : $qtd_comprada <br>";
echo"Desconto : $percentual_desconto <br>";
echo"Pagar : $resultado <br>";
