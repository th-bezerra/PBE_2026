
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Pedido</title>
</head>
<body>

    <h1>Cadastro de Pedido</h1>

    <form action="view_relatorio.php" method="POST">

        <label>Nome do cliente:</label>
        <input type="text" name="nome" required>
        <br><br>

        <label>E-mail:</label>
        <input type="email" name="email" required>
        <br><br>

        <label>Data do pedido:</label>
        <input type="date" name="data" required>
        <br><br>

        <label>Produto:</label>
        <input type="text" name="produto" required>
        <br><br>

        <label>Preço unitário (R$):</label>
        <input type="number" name="preco" step="0.01" min="0.01" required>
        <br><br>

        <label>Quantidade:</label>
        <input type="number" name="quantidade" min="1" required>
        <br><br>

        <p>Desconto:</p>

        <input type="radio" name="desconto" value="0" checked>
        Sem desconto
        <br>

        <input type="radio" name="desconto" value="10">
        10%
        <br>

        <input type="radio" name="desconto" value="20">
        20%
        <br><br>

        <p>Forma de pagamento:</p>

        <input type="radio" name="pagamento" value="Pix" required>
        Pix
        <br>

        <input type="radio" name="pagamento" value="Cartão">
        Cartão
        <br>

        <input type="radio" name="pagamento" value="Dinheiro">
        Dinheiro
        <br><br>

        <p>Serviços adicionais:</p>

        <input type="checkbox" name="servicos[]" value="Entrega">
        Entrega (R$ 15,00)
        <br>

        <input type="checkbox" name="servicos[]" value="Embalagem">
        Embalagem (R$ 5,00)
        <br><br>

        <label>Observações:</label>
        <br>
        <textarea name="observacoes" rows="4" cols="30"></textarea>
        <br><br>

        <input type="submit" value="Calcular Pedido">
        <input type="reset" value="Limpar">

    </form>

</body>
</html>
