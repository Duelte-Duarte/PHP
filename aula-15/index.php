<?php
    // ARRAYS (matrizes)
    $carros = array("fusca","uno","gol","brasilia");
    $carros = ["fusca","uno","gol","brasilia"];

    $carros[1] = "ferrari";

    $quantidade = count($carros);

    echo $carros[1]."<br>";
    echo $quantidade."<br>";

    $qtd = count($carros);

    for ($i = 0; $i < $qtd; $i++){
        echo $carros[$i]."<br>";
    }

    $idade = array("Duelte"=>"30","Maria"=>"15","Pedro"=>"60");
    echo $idade["Pedro"]."<br>";

    foreach ($idade as $chave => $valor){
        echo "A chave é $chave e o valor é $valor"."<br>";
    }

    sort($carros);
    foreach ($carros as $carro){
        echo $carro."<br>";
    }
?>