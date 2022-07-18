<?php
    /* MANIPULAÇÃO DE STRINGS */
    $palavra = "Beleza";

    //strlen() - conta letras
    echo strlen ($palavra);

    //str_word_count() - conta palavras
    echo str_word_count($palavra);

    //strrev() - reverso
    echo strrev('Duelte');

    // strpos() - saber a posição da palavra numa frase
    echo strpos("Oi tudo bem contigo", "bem");

    // str_replace() - muda a palavra que já existe
    echo str_replace("Beleza", "sou lindo demais", $palavra);
?>