<?php
    /* IF ELSE ELSEIF

    if (condicao) {
        o que acontece se verdadeira
    } else {
        o que acontece se falso
    }

    if (condicao) {
        o que acontece se verdadeira
    } elseif {
        o que acontece se a primeira for falso e essa for verdadeira
    } else {
        o que acontece se todas as condições forem falsas
    } */

    $hora = 0;

    if ($hora < 12) {
        echo "Bom dia!";
    } elseif ($hora < 18) {
        echo "Boa tarde!";
    } else {
        echo "Boa noite!";
    }

?>