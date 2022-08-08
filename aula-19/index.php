<?php
$erronome = "";
$erroemail = "";
$errosenha = "";
$errorsenha = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        // VERIFICAR SE ESTA VAZIO O POST NOME
        if (empty($_POST['nome'])){
            $erronome = "Por favor, preencha um nome";
        }else {
            // PEGAR O VALOR VINDO DO POST E LIMPAR
            $nome = limparpost($_POST['nome']);
            // VERIFICAR SE TEM SOMENTE LETRAS
            if (!preg_match("/^[a-zA-Z-' ]*$/", $nome)){
                $erronome = "Apenas aceitamos letras e espaços em branco!";
            }
        }


        // VERIFICAR SE ESTA VAZIO O POST EMAIL
        if (empty($_POST['email'])){
            $erroemail = "Por favor, preencha um email";
        }else {
            // PEGAR O VALOR VINDO DO POST E LIMPAR
            $email = limparpost($_POST['email']);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $erroemail = "E-mail inválido!";
            }
        }


        // VERIFICAR SE ESTA VAZIO O POST SENHA
        if (empty($_POST['senha'])){
            $errosenha = "Por favor, informe uma senha";
        }else {
            // PEGAR O VALOR VINDO DO POST E LIMPAR
            $senha = limparpost($_POST['senha']);
            if (strlen($senha) < 6){
                $errosenha = "A senha precisa ter no mínimo 6 dígitos";
            }
        }


        // VERIFICAR SE ESTA VAZIO O POST REPETE SENHA

        if (empty($_POST['rsenha'])){
            $errorsenha = "Por favor, repete sua senha";
        }else {
            // PEGAR O VALOR VINDO DO POST E LIMPAR
            $rsenha = limparpost($_POST['rsenha']);
            if ($rsenha !== $senha){
                $errorsenha = "A senha precisa ser a mesma";
            }
        }

        if (($erronome=="") && ($erroemail=="") && ($errosenha=="") && ($errorsenha=="")){
            header('Location: obrigado.php');
        }


    }

    function limparpost($valor) {
        $valor = trim($valor);
        $valor = stripslashes($valor);
        $valor = htmlspecialchars($valor);
        return $valor;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de Formulário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1><span>AULA PHP</span><br>Validação de Formulário</h1>

        <form action="" method="post">
            <!-- NOME COMPLETO -->
            <label for="nome">Nome completo</label><br>
            <input type="text" <?php if(!empty($erronome)){echo "class='invalido'";}?> <?php
            if (isset($_POST['nome'])){ echo "value=' ".$_POST['nome']."'";}?> name="nome" id="nome" placeholder="Digite seu nome" >
            <br><span class="erro"><?php echo $erronome; ?></span>

            <!-- EMAIL -->
            <label for="email">E-mail</label><br>
            <input type="email" <?php if(!empty($erroemail)){echo "class='invalido'";}?> <?php
            if (isset($_POST['email'])){ echo "value=' ".$_POST['email']."'";}?>name="email" id="email" placeholder="email@hotmail.com" >
            <br><span class="erro"><?php echo $erroemail; ?></span>

            <!-- SENHA -->
            <label for="senha">Senha</label><br>
            <input type="password" <?php if(!empty($errosenha)){echo "class='invalido'";}?> <?php
            if (isset($_POST['senha'])){ echo "value=' ".$_POST['senha']."'";}?>name="senha" id="senha" placeholder="Digite sua senha" >
            <br><span class="erro"><?php echo $errosenha; ?></span>

            <!-- REPETE SENHA -->
            <label for="rsenha">Repete Senha</label><br>
            <input type="password" <?php if(!empty($errorsenha)){echo "class='invalido'";}?> <?php
            if (isset($_POST['rsenha'])){ echo "value=' ".$_POST['rsenha']."'";}?>name="rsenha" id="rsenha" placeholder="Repita sua senha" >
            <br><span class="erro"><?php echo $errorsenha; ?></span>

            <button type="submit">Enviar fomulário</button>
            
        </form>
    </main>
</body>
</html>