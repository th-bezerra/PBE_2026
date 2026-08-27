<?php

function calcularPedido($nomeProduto, $precoUnitario, $quantidade, $desconto = 0, $imposto = 0){
    $subtotal = $precoUnitario * $quantidade;
    $valorDesconto = $subtotal * ($desconto / 100);
    $valorImposto = $subtotal * ($imposto / 100);
    $totalFinal = $subtotal - $valorDesconto + $valorImposto;

    return[
        "nomeProduto" => $nomeProduto,
        "subtotal" => $subtotal,
        "valorDesconto" => $valorDesconto,
        "valorImposto" => $valorImposto,
        "totalFinal" => $totalFinal
    ];
}


?>



<?php

function CalculoFrete($valorTotal){
    $frete = $valorTotal * (10/100);
    $TotalComFrete = $frete + $valorTotal;
    return $TotalComFrete;
}

?>