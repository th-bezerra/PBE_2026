<?php 

$nome = $_POST['nome'];
$peso = $_POST['peso_kg'];
$altura = $_POST['altura'];

$altura = $altura * 100;

$imc = $altura * $altura / $peso;

require_once "view_relatorio.php";
?>