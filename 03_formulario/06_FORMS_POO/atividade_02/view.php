<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 02</title>
</head>
<body>
    <form action="logica.php" method="POST">
        <label for="" required>Nome:</label>
        <br>
        <input type="text" name="nome" required>
        <br><br>
        <p>Turma:</p>
        <select name="turma" required>
            <option value="1">1º IDS</option>
            <option value="2">2º IDS</option>
            <option value="3">3º IDS</option>
        </select>
        <br><br>
        <label for="" required>Nota 1:</label>
        <br>
        <input type="number" name="nota1" step="0.01" min="0" max="10" required>
        <br><br>
        <label for="" required>Nota 2:</label>
        <br>
        <input type="number" name="nota2" step="0.01" min="0" max="10" required>
        <br><br>
        <label for="" required>Nota 3:</label>
        <br>
        <input type="number" name="nota3" step="0.01" min="0" max="10" required>
        <br><br>
        <label for="" required>Faltas:</label>
        <br>
        <input type="number" min="0" max="80" name="faltas" required>
        <br><br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>