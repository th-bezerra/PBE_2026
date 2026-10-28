<?php

$nome = $_POST["nome"];
$email = $_POST["email"];

$categoria = $_POST["tipo_do_veiculo"];
$dias =  $_POST["qtd_dias"];

$data_retirada = $_POST["data_retirada"];

$seguro = $_POST["seguro"] ;
$gps = $_POST["gps"] ;
$cadeirinha = $_POST["cadeirinha"] ;


function calcularSubtotal($diaria, $dias) {
    return $diaria * $dias;
}


function calcularPercentualDesconto($dias) {
    if ($dias >= 1 && $dias <= 6) {
        return 0;
    } elseif ($dias >= 7 && $dias <= 14) {
        return 10;
    } else {
        return 20;
    }
}


if ($categoria == "Economico") {
    $diariaVeiculo = 100;

} elseif ($categoria == "Intermediario") {
    $diariaVeiculo = 150;

} elseif ($categoria == "SUV") {
    $diariaVeiculo = 250;
} else {
    $diariaVeiculo = 0;
}


$diariaAdicionais = 0;

if ($seguro == "Sim") {
    $diariaAdicionais += 40;
}

if ($gps == "Sim") {
    $diariaAdicionais += 15;
}

if ($cadeirinha == "Sim") {
    $diariaAdicionais += 20;
}


$subtotalVeiculo = calcularSubtotal($diariaVeiculo, $dias);

$subtotalAdicionais = calcularSubtotal($diariaAdicionais, $dias);


$total = $subtotalVeiculo + $subtotalAdicionais;


$percentualDesconto = calcularPercentualDesconto($dias);

$valorDesconto = $total * $percentualDesconto / 100;


$totalPagar = $total - $valorDesconto;


require_once "view_relatorio.php";

?>
