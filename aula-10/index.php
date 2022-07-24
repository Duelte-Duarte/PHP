<?php
    /* OPERADORES
    - > são aqueles sinais que usamos para atribuir valores, comparar valores, fazer calculos e muito mais...

    ex: + - * / = ++ -- += &&

    1) Operadores Aritméticos (matemáticos);
    2) Operadores de Atribuição;
    3) Operadores de Sequência (concatenação);
    4) Operadores de Comparação;
    5) Operadores Condicional (Ternário);
    6) Operadores Lógicos;

    SÃO OS MESMOS DO JAVASCRIPT; */

    // JAVASCRIPT
    var nome = "DUelte";
    var sobrenome = "Glebchen";
    var nome-sobrenome = nome + sobrenome;

    // PHP
    $nome = "Duelte ";
    $sobrenome = "Glebchen";
    $nome_completo = $nome . $sobrenome;
    echo $nome_completo;
?>