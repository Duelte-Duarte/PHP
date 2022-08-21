<?php
    // MANIPULANDO DATAS E HORA - date()

    // DATA COMPLETA
    echo date('d/m/Y')."<br>";
    echo date('F');
    echo "<br>";

    // HORA
    echo date('H:i:s')."<br>";

    // PADRAO BRASILEIRO DE DATAS
    // 11/08/2022

    // PADRAO NORTE AMERICANO
    // 2022/08/06

    // CALCULAR DIAS ENTRE DATAS
    $hoje = date('Y-m-d');
    $vencimento = '2022-08-22';
    $diferenca = strtotime($vencimento) - strtotime($hoje);
    $dias = floor($diferenca / (60*60*24));
    // CONVERTER PARA O PADRAO BR
    $data_hoje = explode('-',$hoje);
    $br_hoje = $data_hoje[2]."/".$data_hoje[1]."/".$data_hoje[0];

    $venc = explode('-',$vencimento);
    $br_venc = $venc[2]."/".$venc[1]."/".$venc[0];

    echo "Vencimento: $vencimento"."<br>";
    echo "A diferença é de $dias dias entre as datas"."<br>";
    echo $br_hoje."<br>";

    echo "Vencimento: $br_venc"."<br>";

    // COMPARAR DUAS DATAS
    $data1 = '2022-08-11';
    $data2 = '2022-08-22';

    if (strtotime($data1) > strtotime($data2)) {
        echo "A data 1 é maior que a data 2 <br>";
        echo "Vencido. <br>";
    } elseif(strtotime($data1) == strtotime($data2)) {
        echo "A data 1 é igual a data 2 <br>";
        echo "Vence hoje! <br>";
    } else {
        echo "A data 1 é menor que a data 2 <br>";
        echo "Tudo tranquilo";
    }

?>