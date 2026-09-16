<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4</title>
</head>
<body> 
    <h1>Calcular Média do Aluno</h1>

    <form action="logica.php" method="POST">
        <label for="">Nome do Aluno:</label>
        <br>
        <input type="text" name="nome_alu">
        <br><br>
        <label for="">Nota 1:</label>
        <br>
        <input type="number" name="nota_1">
        <br><br>
        <label for="">Nota 2:</label>
        <br>
        <input type="number" name="nota_2">
        <br><br>
        <label for="">Nota 3:</label>
        <br>
        <input type="number" name="nota_3">
        <br><br>
        <button type="submit">Calcular Média</button>
    </form>
</body>
</html>