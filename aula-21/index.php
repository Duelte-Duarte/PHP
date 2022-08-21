<?php
    // INCLUDE E REQUIRE

    include_once('teste.php'); /* _once (CARREGADO APENAS UMA VEZ) é opcional*/
    echo "<br>";
    require('teste.php');

    // CONTINUAÇÃO
    
    /* include  SE DER ERRO ELE CONTINUA O CODIGO */
    /* require  SE DER ERRO ELE NÃO CONTINUA */

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!-- IMPORTAR MENU -->
    <?php include('menu.php'); ?>

    <!-- IMPORTAR MIOLO -->
    <?php include('miolo.php'); ?>

    <!-- IMPORTAR RODAPE -->
    <?php include('rodape.php'); ?>
    
</body>
</html>