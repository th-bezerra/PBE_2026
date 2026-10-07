<?php

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$CPF = $_POST['CPF'];
$tipo_do_jogo = $_POST['tipo_do_jogo'];
$preco_jogo = $_POST['preco_jogo'];
$tipo_de_pagamento = $_POST['tipo_de_pagamento']; 

$usuarios = [
    ["nome" => $nome, "telefone" => $telefone, "CPF" => $CPF]
];
$jogos = [
    ["tipo_do_jogo" => $tipo_do_jogo, "preco_jogo" => $preco_jogo, "subtotal" => $preco_jogo]
];
$pagamentos = [
    ["tipo_de_pagamento" => $tipo_de_pagamento]
];

$total = 0;
foreach ($jogos as $jogo){
    $total += $jogo['subtotal'];
    
}
$desconto = 0;
if($total > 200){
    $desconto = 10 ;
}
$valorDesconto = $total * ($desconto / 100);
$total = $total - $valorDesconto;
require_once "view_relatorio.php";
?>