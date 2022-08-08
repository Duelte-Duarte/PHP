<?php
    /* SUPERGLOBAIS

    Algumas variáveis predefinidas no PHP são "superglobais", o que significa que elas são sempre acessíveis, independentemente do escopo - e você pode acessá-las a partir de qualquer função, classe ou arquivo sem ter que fazer nada de especial.

    Basta invocar essas variáveis. São elas:

    $GLOBALS
    $_SERVER
    $_REQUEST
    $_POST
    $_GET
    $_FILES
    $_ENV
    $_COOKIE
    $_SESSION
    */

    // $GLOBALS - pode ser usado tanto fora ou dentro da função

    $a = 20;
    $b = 10;

    function soma(){
        $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
        // global $a, $b, $c;
        // $c = $a + $b;
    }
    soma();
    echo $c. "<br>";

    // $_SERVER - mostra o caminho
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['REMOTE_ADDR'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";

    foreach ($_SERVER as $chave => $valor){
        echo "<strong>$chave</strong> : $valor <br>";
    }

?>