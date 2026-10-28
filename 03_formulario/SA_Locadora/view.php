<!-- Pedro Guiado pelo inimigo-->
 <!-- Thiago Guiado pelo Cão-->
]<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SA Locadora</title>
</head>
<body>
    

    <h1>Locadora de Veículos</h1>

    <form action="logica.php" method="POST">

        <h2>Dados do Cliente</h2>

        <label>Nome:</label>
        <br>
        <input type="text" name="nome" required>
        <br><br>

        <label>E-mail:</label>
        <br>
        <input type="email" name="email" required>
        <br><br>

        <h2>Dados da Locação</h2>

        <label>Data da Retirada:</label>
        <br>
        <input type="date" name="data_retirada" required>
        <br><br>

        <label>Quantidade de Dias:</label>
        <br>
        <input type="number" name="qtd_dias" min="1" required>
        <br><br>

        <label>Categoria do veículo:</label>
        <br>
        <select name="tipo_do_veiculo" required>
            <option value="">Selecione o veículo</option>
            <option value="Economico">Econômico - R$ 100,00</option>
            <option value="Intermediario">Intermediário - R$ 150,00</option>
            <option value="SUV">SUV - R$ 250,00</option>
        </select>

        
        <h2>Adicionais</h2>

        <p>Seguro Total (R$ 40,00/dia):</p>
        <input type="radio" name="seguro" value="Sim" required> Sim
        <input type="radio" name="seguro" value="Não"> Não

        <p>GPS (R$ 15,00/dia):</p>
        <input type="radio" name="gps" value="Sim" required> Sim
        <input type="radio" name="gps" value="Não"> Não

        <p>Cadeirinha infantil (R$ 20,00/dia):</p>
        <input type="radio" name="cadeirinha" value="Sim" required> Sim
        <input type="radio" name="cadeirinha" value="Não"> Não

        <br><br>
        <button type="submit">Gerar Contrato</button>



    </form>

</body>
</html>
