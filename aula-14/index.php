<?php
    // FUNÇÕES functions()

    function escrever($nome){
        echo "Olá tudo bom? <br> $nome ";
    }
    escrever("Duelte <br>");


    function soma($valor1, $valor2) {
        echo $valor1 + $valor2 ."<br>";
    }
    soma(10,50);
    soma(2145, 6532);

    function cafe($tipo = "cappuccino") {
        return "Fazendo uma xícara de: $tipo" ."<br>";
    }
    echo cafe ("expresso");
    echo cafe ();

?>