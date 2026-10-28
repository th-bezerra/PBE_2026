<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: view.php");
    exit;
}

// Recebe os dados do formulário
$nome = trim($_POST["nome"] ?? "");
$telefone = trim($_POST["telefone"] ?? "");
$CPF = trim($_POST["CPF"] ?? "");
$tipo_do_jogo = $_POST["tipo_do_jogo"] ?? "";
$tipo_de_pagamento = $_POST["tipo_de_pagamento"] ?? "";

// Preços dos jogos
$catalogo = [
    "Minecraft" => 99.90,
    "GTA V" => 119.90,
    "Elden Ring" => 199.90,
    "Cyberpunk 2077" => 149.90,
    "Red Dead Redemption 2" => 249.90
];

// Verifica os dados obrigatórios
if (
    $nome === "" ||
    $telefone === "" ||
    $CPF === "" ||
    !isset($catalogo[$tipo_do_jogo]) ||
    !in_array($tipo_de_pagamento, [
        "Pix",
        "Cartão de crédito",
        "Cartão de débito",
        "Boleto"
    ], true)
) {
    exit("Dados inválidos! <a href='view.php'>Voltar</a>");
}

// Organiza os dados do cliente
$usuarios = [
    "nome" => $nome,
    "telefone" => $telefone,
    "CPF" => $CPF
];

// Organiza os dados do jogo
$preco_jogo = $catalogo[$tipo_do_jogo];

$jogos = [
    [
        "tipo_do_jogo" => $tipo_do_jogo,
        "preco_jogo" => $preco_jogo,
        "subtotal" => $preco_jogo
    ]
];

// Organiza os dados do pagamento
$pagamentos = [
    "tipo_de_pagamento" => $tipo_de_pagamento
];

// Calcula o total da compra
$total = 0;

foreach ($jogos as $jogo) {
    $total += $jogo["subtotal"];
}

// Aplica desconto de 10% acima de R$ 200
$desconto = ($total > 200) ? 10 : 0;

$valorDesconto = $total * ($desconto / 100);

$totalFinal = $total - $valorDesconto;

// Exibe o relatório
require_once "view_relatorio.php";

?>