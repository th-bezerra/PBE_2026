<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Store</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #1b2838, #0e141b);
            color: white;
            min-height: 100vh;
            padding: 30px 15px;
        }

        header {
            text-align: center;
            margin-bottom: 30px;
        }

        header h1 {
            color: #66c0f4;
            font-size: 36px;
        }

        header p {
            color: #c7d5e0;
            margin-top: 10px;
        }

        main {
            background: #16202d;
            max-width: 500px;
            margin: auto;
            padding: 30px;
            border-radius: 12px;
            border: 1px solid #2a475e;
        }

        h2 {
            color: #66c0f4;
            margin-bottom: 20px;
            text-align: center;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 7px;
        }

        input, select {
            width: 100%;
            padding: 12px;
            border: 1px solid #2a475e;
            border-radius: 5px;
            background: #0e141b;
            color: white;
        }

        button {
            width: 100%;
            padding: 14px;
            margin-top: 25px;
            background: #5c7e10;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background: #a4d007;
            color: #0e141b;
        }

        footer {
            text-align: center;
            margin-top: 25px;
            color: #8f98a0;
        }
    </style>
</head>

<body>

<header>
    <h1>🎮 GAME STORE</h1>
    <p>Sua próxima aventura começa aqui!</p>
</header>

<main>
    <h2>Comprar jogo</h2>

    <form action="logica.php" method="POST">

        <label for="nome">Nome do comprador:</label>
        <input type="text" id="nome" name="nome"
               required maxlength="100">

        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone"
               required maxlength="20">

        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="CPF"
               required maxlength="14">

        <label for="jogo">Escolha seu jogo:</label>
        <select id="jogo" name="tipo_do_jogo" required>
            <option value="">Selecione um jogo</option>
            <option value="Minecraft">Minecraft - R$ 99,90</option>
            <option value="GTA V">GTA V - R$ 119,90</option>
            <option value="Elden Ring">Elden Ring - R$ 199,90</option>
            <option value="Cyberpunk 2077">Cyberpunk 2077 - R$ 149,90</option>
            <option value="Red Dead Redemption 2">Red Dead Redemption 2 - R$ 249,90</option>
        </select>

        <label for="pagamento">Forma de pagamento:</label>
        <select id="pagamento" name="tipo_de_pagamento" required>
            <option value="">Selecione</option>
            <option value="Pix">Pix</option>
            <option value="Cartão de crédito">Cartão de crédito</option>
            <option value="Cartão de débito">Cartão de débito</option>
            <option value="Boleto">Boleto</option>
        </select>

        <button type="submit">Finalizar compra</button>
    </form>
</main>

<footer>
    &copy; 2026 Game Store - Todos os direitos reservados.
</footer>

</body>
</html>