<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relatório de Aluno</title>
    </head>
    <body>
        <h1>Boletim do Aluno</h1>
        <p>Nome do Aluno: <?= $aluno->getNome() ?></p>
        <p>Turma do Aluno: <?= $aluno->getTurma() ?> </p>

        <table border = 1>
            <tr>
                <th> Nota 1 </th>
                <th> Nota 2 </th>
                <th> Nota 3 </th>
                <th> Média </th>
                <th> Faltas </th>
                <th> Frequência </th>
            </tr>
            <tr>
                <td> <?= $aluno->getNota1() ?> </td>
                <td> <?= $aluno->getNota2() ?> </td>
                <td> <?= $aluno->getNota3() ?> </td>
                <td> <?= number_format($aluno->Media(), 2, ",", ".") ?> </td>
                <td> <?= $aluno->getFalta() ?> </td>
                <td> <?= $aluno->calcularFrequencia() ?>%</td>
            </tr>
        </table>

        <?php if ($aluno->calcularFrequencia() < 75): ?>
            <h2>Reprovado por Falta</h2>
            <p>"Atenção! Procure o professor para saber os próximos passos."</p>

        <?php elseif ($aluno->Media() >= 7): ?>
            <h2>Aprovado</h2>
            <p>Parabéns continue assim!</p>

        <?php elseif ($aluno->Media() >= 5): ?>
            <h2>Recuperação</h2>
            <p>Atenção: Procure o professor para saber os próximos passos</p>

        <?php else: ?>
            <h2>Reprovado</h2>
            <p>Atenção: Procure o professor para saber os próximos passos</p>

        <?php endif ?>
    </body>
</html>