<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h1>Cadastro de Usuário</h1>

    <form action="logica.php" method="POST">
        <label for="">Nome:</label>
        <br>
        <input type="text" name="nome">
        <br><br>
        <label for="">Email:</label>
        <br>
        <input type="email" name="email">
        <br><br>
        <label for="">Senha:</label>
        <br>
        <input type="password" name="senha">
        <br><br>
        <button type="submit">Cadastrar</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>
