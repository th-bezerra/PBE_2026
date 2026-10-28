
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contrato de Locação</title>
</head>
<body>

    <h1>Contrato de Locação</h1>

    <p><b>Cliente:</b> <?= $nome ?></p>

    <p><b>E-mail:</b> <?= $email ?></p>

    <p><b>Retirada:</b> <?= $data_retirada ?></p>


    <h3>Adicionais</h3>

    <p>Seguro total: <?= $seguro ?></p>

    <p>GPS: <?= $gps ?></p>

    <p>Cadeirinha infantil: <?= $cadeirinha ?></p>

    <table border="1">
        <tr>
            <th>Item</th>
            <th>Diária</th>
            <th>Dias</th>
            <th>Subtotal</th>
        </tr>

        <tr>
            <td><?= $categoria ?></td>
            <td>R$ <?= number_format($diariaVeiculo, 2, ',', '.') ?></td>
            <td><?= $dias ?></td>
            <td>R$ <?= number_format($subtotalVeiculo, 2, ',', '.') ?></td>
        </tr>

        <tr>
            <td>Adicionais</td>
            <td>R$ <?= number_format($diariaAdicionais, 2, ',', '.') ?></td>
            <td><?= $dias ?></td>
            <td>R$ <?= number_format($subtotalAdicionais, 2, ',', '.') ?></td>
        </tr>
    </table>

    <br>

    <p><b>Total:</b> R$ <?= number_format($total, 2, ',', '.') ?></p>

    <p>
        <b>Desconto:</b>
        R$ <?= number_format($valorDesconto, 2, ',', '.') ?>
        (<?= $percentualDesconto ?>%)
    </p>

    <?php if ($valorDesconto > 0): ?>
        <h3>Parabéns! Você ganhou um desconto!</h3>
    <?php endif; ?>

    <p>Dica: alugando por 7 dias ou mais você ganha desconto!</p>

    <h2>Total a pagar: R$ <?= number_format($totalPagar, 2, ',', '.') ?></h2>

</body>
</html>
