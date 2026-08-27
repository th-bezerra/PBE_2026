<?php
    function analisarAluno ($numero){
        $dobro = $numero *2;
        $triplo = $numero *3;
        $quadrado = $numero * $numero;

        if($numero > 0){
            $situacao = "Positivo";
        }
        else{
            $situacao = "Negativo";

        }
        return [
            "numero" => $numero,
            "dobro" => $dobro,
            "triplo" => $triplo,
            "quadrado" => $quadrado,
            "situacao" => $situacao
        ];
    }
    $numero = 5;

        $resultado = analisarAluno($numero);
        echo "Numero: "  .$resultado["numero"] . "<br>";
        echo "Dobro: "  .$resultado["dobro"] . "<br>";
        echo "Triplo: "  .$resultado["triplo"] . "<br>";
        echo "Quadrado: "  .$resultado["quadrado"] . "<br>";
        echo "Situação: "  .$resultado["situacao"] . "<br>";