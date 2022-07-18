<?php
    //VARIAVEIS

    $x = 10;
    $y = 5;

    // echo "O valor de $x + $y é igual a"; echo $x + $y ;

    function teste(){
        global $x;
        echo "O valor de x dentro da função: $x";
    }
    teste();
    echo "<br>O valor fora de x fora: $x";
?>