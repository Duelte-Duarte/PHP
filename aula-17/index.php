<?php
    // $_GET - pegar informações de algum lugar
    if (isset($_GET['nome'])){
        $nome = htmlspecialchars($_GET['nome']);
    } else {
        $nome = "Mundo!";
    }

    if (isset($_GET['cor'])){
        $cor = htmlspecialchars($_GET['cor']);
    } else {
        $cor = 'white';
    }

    if (isset($_GET['nome']) && isset($_GET['idade'])){
        $nome = $_GET['nome'];
        $idade = $_GET['idade'];
        echo "<h1>O nome é $nome e a idade é $idade";
    }
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background: <?php echo $cor; ?>
        }
    </style>
</head>
<body <?php if ($nome =="Duelte") { echo "style='background:red; color:white'";} ?>>
    <h1>Olá <?php echo $nome; ?></h1>
    <a href="index.php?nome=Duelte&cor=green">Ir para Duelte</a><br>
    <a href="index.php?nome=Abestada&cor=yellow">Ir para Abestada</a><br>
    <a href="index.php?nome=Bernardo&cor=blue">Ir para Bernardo</a><br><br>

    <form action="recebe.php" method="get">
        <input type="text" name="nome" placeholder="Digite seu nome"><br>
        <input type="text" name="idade" placeholder="Digite sua idade"><br>
        <button>Enviar</button>
    </form>
</body>
</html>