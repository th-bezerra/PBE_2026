<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5</title>
</head>
<body>
    <h1>Calcular IMC</h1>

    <form action="logica.php" method="POST">    
        <label for="">Nome:</label>
        <br>
        <input type="text" name="nome" require>
        <br><br>
        <label for="">Peso em kg:</label>
        <br>
        <input type="number" name="peso_kg" require step = 0.1>
        <br>
        <br>
        <label for="">Altura em Metros</label>
        <br>
        <input type="number" name="altura" require step = 0.1>
        <br><br>
        <button trype="submit">Calcular IMC</button>
</body>
</html>