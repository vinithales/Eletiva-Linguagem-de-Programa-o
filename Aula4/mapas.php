<?php

    $frutas = array("morango", "maçã", "abacaxi");

    echo "<p>".$frutas[0]."</p>";


    $frutas[0] = "laranja";

    $fruta["fruta"] = 15;


    $cores[0] = "azul";
    $cores["cores"] = "laranja";

    $mapa = [
        "valor1" => 1,
        "valor2" => 2,
        "valor3" => 3
    ];

    var_dump($mapa);
    echo "<p></p>";
    print_r($cores);

    asort($fruta); #ordenar pela chave
    #ksort($frutas); #ordenar por valor

    foreach($frutas as $chave => $valor){
        echo "Na posição $chave temos a fruta: $valor";
    }