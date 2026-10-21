<?php
require_once "Turma.php";

// Criando professor
$professor = new Professor("Leonardo Evagenlista", "leonardo@email.com", "Programação");

// Criando turma
$turma = new Turma("3INFO", $professor);

// Criando alunos
$aluno1 = new Aluno("Ana Souza", "ana@gmail.com", "A123");
$aluno1->adicionarNota(8);
$aluno1->adicionarNota(7);
$aluno1->adicionarNota(9);

$aluno2 = new Aluno("Carlos Silva", "carlos@gmail.com", "B456");
$aluno2->adicionarNota(5);
$aluno2->adicionarNota(6);
$aluno2->adicionarNota(4);

$aluno3 = new Aluno("Julia Torres", "julia@gmail.com", "C789");
$aluno3->adicionarNota(9);
$aluno3->adicionarNota(8);
$aluno3->adicionarNota(10);

// Adicionando alunos à turma
$turma->adicionarAluno($aluno1);
$turma->adicionarAluno($aluno2);
$turma->adicionarAluno($aluno3);

// Exibindo resumo e lista
$turma->exibirResumo();
$turma->listarAlunos();

// Exibir dados polimorfismo
$pessoas = [$professor, $aluno1, $aluno2];
foreach ($pessoas as $pessoa) {
    $pessoa->exibirDados(); // cada objeto responde do seu jeito
}
?>