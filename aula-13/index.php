<?php
    /* LOOPS (laços de repetição)
    
    Usado quando você deseja que o mesmo bloco de código seja executado repetidamente um determinado número de vezes.
    Em vez de adicionar várias linhas de código quase iguais em um script, podemos usar loops.

    PRINCIPAIS NO PHP

    while -> repete enquanto a condição for true

    do...while -> executa um bloco, e depois repete o loop desde que a condição seja verdadeira.

    for -> repete um determinado número de vezes.

    foreach -> executa algo para cada item dentro de uma matriz.
    */

    /*WHILE 
    $x = 0;

    while($x <=100) {
        echo "O número é: $x <br>";
        // $x++;
        $x+=10;
    }*/

    /*DO...WHILE
    $x = 1;

    do {
        echo "O número é: $x <br>";
        $x++;
    } while ($x <=5);*/

    /*FOR
    for ($x = 0; $x <= 10; $x++){
        echo "O número é: $x <br>";
    }*/

    // FOREACH
    $cores = ["azul","amarelo","verde","vermelho"];

    foreach($cores as $valor) {
        echo "A cor é $valor <br>";
    }
?>