<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 03</title>
</head>
<body>
    <form action="logica.php" method="POST">
    <form></form>
        <label for="nome">Nome do Funcionário:</label><br>
        <input type="text" id="nome" name="nome" required>
        <br>
        <p>Cargo:</p>
        <select>
            <option value="">Escolha uma Cargo</option>
            <option value="auxiliar">Auxiliar R$ 2.200,00</option>
            <option value="tecnico">Técnico R$ 3.520,00</option>
            <option value="analista">Analista R$ 5.500,00</option>
        </select>
        <br><br>
        <label for="">Horas Extras:</label><br>
        <input type="number" name="horas_extras" min="0">
        <br><br>
        <label for="">Utiliza vale-transporte?</label>
        <br>
        <input type="radio" name="vale"> Sim
        <input type="radio" name="vale"> Não
        <br><br>
        <button type="submit">Gerar Holerite</button>
    </form>
</body>
</html>