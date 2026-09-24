<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Desafio</title>
</head>
<body>
	<article style="background-color: #1a0670ff">
		<h1 style="color: white; background-color: #051730ff; text-align:center">PHT Games</h1>
		<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTg-MBb7EGqQLtv9f6aXOvcb2G27bZo3BV1ZvIhSHMGNsB3AwK3pkziUmw&s=10" alt="Games" width="60%">
		<br><br>

		<h2 style="color: white">Dados do cliente</h2>
		<form action="logica.php" method="POST"> 
			<label style="color: white">Nome :</label> 
			<br>
			<input type="text" name="nome">
			<br><br>

			<label style="color: white">CPF :</label> 
			<br>
			<input type="number" name="CPF">
			<br><br>

			<label style="color: white">Telefone :</label> 
			<br>
			<input type="text" name="telefone">
			<br><br>

			<h2 style="color: white">Tipos de Jogos</h2>
			<select name="tipo_do_jogo" required>
				<option value="">Escolha um tipo de jogo</option>
				<option value="RPG">RPG</option>
				<option value="FPS">FPS</option>
				<option value="Modo Historia">Modo Historia</option>
				<option value="Mundo Aberto">Mundo Aberto</option>
				<option value="Indie">Indie</option>
			</select>   
			<br><br>

			<h2 style="color: white">Área de Pagamento</h2>
			<label style="color: white">Preço do Jogo:</label>
			<br>
			<input type="text" name="preco_jogo">
			<br>

			<h3 style="color: white">Forma de pagamento</h3>
			<select name="tipo_de_pagamento" required>
				<option value="">Escolha um tipo de Pagamento</option>
				<option value="Dinheiro">Dinheiro</option>
				<option value="PIX">PIX</option>
				<option value="Cartão de credito">Cartão de credito</option>
				<option value="Cartão de debito">Cartão de debito</option>
			</select>   
			<br><br>

			<button type="submit">Finalizar Compra</button>
		</form>
	</article>
</body>
</html>