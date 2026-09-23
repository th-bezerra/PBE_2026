<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 02</title>
</head>
<body>
    <h1>Carrinho de Compras</h1>
    <p>Dados dos Clientes</p>

    <form action="logica.php" method="POST">   
    <label for="">Nome:</label>
        <br>
        <input type="text" name="nome" require>
        <br><br>
    
    <h3>Produto 1</h3>
    <label for="">Nome do Produto:</label>
        <br>
        <input type="text" name="nome_produto_1" required>
        <br><br>
        <label for="">Preco do Produto:</label>
        <br>
        <input type="number" name="preco_1" step="1">
        <br><br>
        <label for="">Quantidade:</label>
        <br>
        <input type="number" name="quantidade_produto_1" step="1">
        <br><br>

        <h3>Produto 2</h3>
    <label for="">Nome do Produto:</label>
        <br>
        <input type="text" name="nome_produto2" required>
        <br><br>
        <label for="">Preco do Produto:</label>
        <br>
        <input type="number" name="preco_2" required>
        <br><br>
        <label for="">Quantidade:</label>
        <br>
        <input type="number" name="quantidade_produto_2" required>
        <br><br>

        <h4>Produto 3</h4>
    <label for="">Nome do Produto:</label>
        <br>
        <input type="text" name="nome_produto3" required>
        <br><br>
        <label for="">Preco do Produto:</label>
        <br>
        <input type="number" name="preco_3" required>
        <br><br>
        <label for="">Quantidade:</label>
        <br>
        <input type="number" name="quantidade_produto_3" required>
        <br><br>

        <button type="submit">Finalizar Compra</button>
</form>
</body>
</html>