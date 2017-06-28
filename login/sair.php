<?php


# para utilizar a sessão, você sempre deve utilizar o comando session_start()
session_start();

# comando para destruir a sessão do usuário
session_destroy();

#header manda o usuário para outra página!
// header("location: inicio.php");
header("location: principal.html");
?>