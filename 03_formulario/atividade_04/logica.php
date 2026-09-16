<?php

$nome_alu = $_POST['nome_alu'];
$nota_1 = $_POST['nota_1'];
$nota_2 = $_POST['nota_2'];
$nota_3 = $_POST['nota_3'];

$media = ($nota_1 + $nota_2 +$nota_3)/3;

if($media > 10){
    $media = 10;
}

require_once "view_relatorio.php";
?>