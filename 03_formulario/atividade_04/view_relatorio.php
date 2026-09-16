<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4</title>
</head>
<body>
    <h1>Resultado do Aluno</h1>
    <p><b>Nome: </b> <?= $nome_alu ?> </p>
    <p><b>Nota 1: </b> <?= $nota_1 ?> </p>
    <p><b>Nota 2: </b> <?= $nota_2 ?> </p>
    <p><b>Nota 3: </b> <?= $nota_3 ?> </p>
    <p><b>Média: </b> <?= $media ?> </p>

    <?php if($media >= 7): ?>
        <p>Aprovado !!</p>
    <?php else: ?>
        <p>Reprovado !!</p>
    <?php endif ?>

    <?php if($media >= 10): ?>
        <p>Você atingiu a nota máxima !!</p>
    <?php endif ?>
</body>
</html>