<!DOCTYPE html>
<html>
<head>
	<title>Cadastrando...</title>
</head>
<body>

<?php
$host = "localhost";
$user = "root";
$pass = "123";
$banco = "revistaart";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());
?>
<?php 
$nome = $_POST['nome'];
$nomUsuario = $_POST['login'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$sql = mysql_query("INSERT INTO usuario(nome, nomUsuario, senha, email)
VALUES('$nome', '$nomUsuario','senha', 'email')");
echo "<center><h1>Cadastro efetuado com sucesso!</h1></center>";
?>
</body>
</html>
