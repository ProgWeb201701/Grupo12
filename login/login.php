<?php

#recebendo os campos enviados pela página html

$nome = $_POST['nome'];
$senha = $_POST['senha'];


if ($nome == 'amanda' && $senha == '12345' ){

	#se o nome estiver correto, começa a sessão
    session_start();
    # agora cria uma sessão que guardará o nome do usuário
    #( ele poderá navegar por todo o sistema sem que seja preciso perguntar seu nome novamente).
    $_SESSION["nome"]=$nome;

    #header manda o usuário para outra página!
    header("location: inicio.php");
} else{
    echo "Dados incorretos!";
}

# não é necessário fechar o PHP se não vão utilizar código HTML abaixo
# se uma página HTML normal tiver qualquer comando PHP, esta página deve conter a extensão .php