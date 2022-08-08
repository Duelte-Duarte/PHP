<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <h1>Metodo Post</h1>
    <form action="recebe.php" method="post">
        <input type="text" name="nome" id="nome" placeholder="Digite seu nome aqui"><br><br>
        <input type="number" name="idade" id="idade" placeholder="Digite sua idade aqui"><br><br>
        <hr><input type="submit" value="Enviar">
    </form>

    <?php
        if (isset($_POST['nome']) && isset($_POST['idade'])){
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];
            echo "<h2>Nome: $nome <br>Idade: $idade</h2>";
        }

    ?>
</body>
</html>