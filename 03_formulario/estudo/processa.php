
<?php

// Receber os dados do formulario
$nome = $_POST['nome'];
$email = $_POST['email'];
$data = $_POST['data'];
$produto = $_POST['produto'];

$preco = (float) $_POST['preco'];
$quantidade = (int) $_POST['quantidade'];
$desconto = (float) $_POST['desconto'];

$pagamento = $_POST['pagamento'];
$observacoes = $_POST['observacoes'] ?? '';

$servicos = $_POST['servicos'] ?? [];

// Calcular o subtotal
$subtotal = $preco * $quantidade;

// Calcular o valor do desconto
$valorDesconto = $subtotal * ($desconto / 100);

// Aplicar o desconto
$total = $subtotal - $valorDesconto;

// Somar os servicos adicionais
$valorServicos = 0;

foreach ($servicos as $servico) {

    if ($servico == "Entrega") {
        $valorServicos += 15;
    } elseif ($servico == "Embalagem") {
        $valorServicos += 5;
    }

}

// Somar os servicos ao total
$totalFinal = $total + $valorServicos;

// Verificar o valor do pedido
if ($totalFinal >= 200) {
    $mensagem = "Pedido de valor alto!";
} else {
    $mensagem = "Pedido de valor abaixo de R$ 200,00.";
}

?>
