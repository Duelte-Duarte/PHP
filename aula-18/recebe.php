<?php
    if (isset($_POST['nome']) && isset($_POST['idade'])){
        $nome = limparpost($_POST['nome']);
        $idade = limparpost($_POST['idade']);
        echo "<h2>Nome: $nome <br>Idade: $idade</h2>";
    }

    function limparpost($valor) {
        $valor = trim($valor);
        $valor = stripslashes($valor);
        $valor = htmlspecialchars($valor);
        return $valor;
    }

?>