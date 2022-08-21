<?php
    // MANIPULAÇÃO DE PASTAS (DIRETÓRIOS)
    $pasta = "nova-pasta";

    // COMANDO PARA CRIAR PASTA
    mkdir('nome-da-pasta');

    if (!is_dir($pasta)){
        mkdir($pasta, 0755);
    }

    // CHMOD - SEGURANÇA (0755)

    $dupla = "teste/teste2/";

    if (!is_dir($dupla)){
        mkdir($dupla, 0755, true);
    } else {
        // rmdir($dupla);
        rename($pasta, 'testamos');
    }

    // RMDIR - DELETAR SEA PASTAN ESTIVER VAZIA
    // RENAME - REDEFINIR NOME DE PASTA
?>