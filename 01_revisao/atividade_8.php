<?php

$idade = 15;
$acompanhanteM18 = true;

if($idade >= 18){
    echo "Pode entrar";
}

elseif($idade >= 14 && $idade <= 17 && $acompanhanteM18 == true){
    echo "Pode entrar, porém acompanhado!";

} else {
    echo "Não pode entrar! ";
}
