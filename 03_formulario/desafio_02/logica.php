<?php
$nome = $_POST['nome'];
$nome_produto_1 = $_POST['nome_produto_1'];
$preco_1 = $_POST['preco_1'];
$quantidade_produto_1 = $_POST['quantidade_produto_1'];
$nome_produto_2 = $_POST['nome_produto_2'];
$preco_2 = $_POST['preco_2'];
$quantidade_produto_2 = $_POST['quantidade_produto_2'];
$nome_produto_3 = $_POST['nome_produto_3'];
$preco_3 = $_POST['preco_3'];
$quantidade_produto_3 = $_POST['quantidade_produto_3'];



$produtos = [
    ["nome" => $nome, "produto" => $nome_produto_1, "preco" => $preco_1, "quantidade" => $quantidade_produto_1, "subtotal" => $preco_1 * $quantidade_produto_1],
    ["nome" => $nome, "produto" => $nome_produto_2, "preco" => $preco_2, "quantidade" => $quantidade_produto_2, "subtotal" => $preco_2 * $quantidade_produto_2],
    ["nome" => $nome, "produto" => $nome_produto_3, "preco" => $preco_3, "quantidade" => $quantidade_produto_3, "subtotal" => $preco_3 * $quantidade_produto_3]
];

$total = 0;
foreach ($produtos as $produto){
    $total += $produto['subtotal'];
}
$desconto = 0;
if(total > 500){
    $desconto = 10 ;
}
$valorDesconto = $total * ($desconto / 100);
$total = $total - $valorDesconto;
require_once "view_relatorio.php";
?>