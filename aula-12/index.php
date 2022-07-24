<?php
    // SWITCH
    $cor = "preto";

    switch($cor) {
        case "vermelho":
            echo "A cor é vermelho";
            break;
        case "azul":
            echo "A cor é azul";
            break;
        case "rosa":
            echo "A cor é rosa";
            break;
        default:
        echo "A cor ".$cor." não é conhecida";
    }
?>