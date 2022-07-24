<?php
    // CONSTANTES
    define("exemplo","oi");

    function teste() {
        echo exemplo;
    }

    teste();

    define("carros",["gol","fusca","uno"]);
    echo carros[0];
?>