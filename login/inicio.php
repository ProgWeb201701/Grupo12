<!DOCTYPE html>
<html>
  <meta charset="utf-8">
    <head>
        <title>Inicio</title>
    </head>
    <body>
        <?php
		    #para utilizar a sessão, você sempre deve utilizar o comando session_start()
        	session_start();
    	    #isset irá verificar se alguma variável existe (muito útil, pois se utilizarmos uma variável que não existe irá dar erro no programa!)

            #$_SESSION["nome"] é a sessão criada no login

            #ou seja, ele irá testar se a sessão 'nome' existe.
            if (isset($_SESSION["nome"])) {
               	#sessão existe
                echo "<a href='sair.php'>Sair</a>";
                } else {
                   	#sessão não existe
                    echo "<a href='inscricao.html'>Login</a>";
            }

            #Fim do php, e volta para HTML
        ?>


        <h1>
            <?php
              	#a mesma coisa, porém, agora exibe mensagens para o usuário
                if (isset($_SESSION["nome"])) {
                    echo "Bem-vindo(a) ".$_SESSION["nome"];
                } else {
                    echo "Faça login ";
                }
            ?>
        </h1>
    </body>
</html>