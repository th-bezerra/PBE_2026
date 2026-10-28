
<?php

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

// Calculos
$subtotal = $preco * $quantidade;

$valorDesconto = $subtotal * ($desconto / 100);

$total = $subtotal - $valorDesconto;

$valorServicos = 0;

foreach ($servicos as $servico) {
    if ($servico == "Entrega") {
        $valorServicos += 15;
    } elseif ($servico == "Embalagem") {
        $valorServicos += 5;
    }
}

$totalFinal = $total + $valorServicos;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Relatório do Pedido</title>
</head>
<body>

    <h1>Relatório do Pedido</h1>

    <h3>Dados do cliente</h3>

    <p>Nome: <?php echo htmlspecialchars($nome); ?></p>
    <p>E-mail: <?php echo htmlspecialchars($email); ?></p>
    <p>Data: <?php echo htmlspecialchars($data); ?></p>

    <h3>Dados do pedido</h3>

    <p>Produto: <?php echo htmlspecialchars($produto); ?></p>
    <p>Preço unitário: R$ <?php echo number_format($preco, 2, ',', '.'); ?></p>
    <p>Quantidade: <?php echo $quantidade; ?></p>
    <p>Pagamento: <?php echo htmlspecialchars($pagamento); ?></p>

    <h3>Valores</h3>

    <p>Subtotal: R$ <?php echo number_format($subtotal, 2, ',', '.'); ?></p>

    <p>Desconto: <?php echo $desconto; ?>%</p>

    <p>Valor do desconto: R$ <?php echo number_format($valorDesconto, 2, ',', '.'); ?></p>

    <p>Serviços adicionais:</p>

    <?php
    if (empty($servicos)) {
        echo "<p>Nenhum serviço selecionado.</p>";
    } else {
        foreach ($servicos as $servico) {
            echo "<p>" . htmlspecialchars($servico) . "</p>";
        }
    }
    ?>

    <p>Valor dos serviços: R$ <?php echo number_format($valorServicos, 2, ',', '.'); ?></p>

    <h2>Total final: R$ <?php echo number_format($totalFinal, 2, ',', '.'); ?></h2>

    <h3>Observações</h3>

    <p><?php echo htmlspecialchars($observacoes); ?></p>

    <br>

    <a href="formulario.php">Voltar ao formulário</a>

</body>
</html>
