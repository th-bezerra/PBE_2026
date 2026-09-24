<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Relatório de Compras</title>
</head>
<body>

	<h1>Relatório de Compras</h1>

	<h2>Dados do Cliente</h2>

	    <p><b>Nome:</b> <?= $nome ?></p>
	    <p><b>Telefone:</b> <?= $telefone ?></p>
	    <p><b>CPF:</b> <?= $CPF ?></p>

	<h2>Dados da Compra</h2>

	    <p><b>Tipo do Jogo:</b> <?= $tipo_do_jogo ?></p>
	    <p><b>Preço do Jogo:</b> R$ <?= $preco_jogo ?></p>

	<h2>Pagamento</h2>

	<p><b>Tipo de Pagamento:</b> <?= $tipo_de_pagamento ?></p>

	<h2>Resumo da Compra</h2>

	    <p><b>Subtotal:</b> R$ <?= $preco_jogo ?></p>
	    <p><b>Desconto:</b> <?= $desconto ?>%</p>
	    <p><b>Valor do Desconto:</b> R$ <?= $valorDesconto ?></p>
	    <p><b>Total:</b> R$ <?= $total ?></p>

</body>
</html>