<?php 





$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "revistaart";

// Create connection com o  banco
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nomUsuario = $_POST['login'];
 



//Insere um usuário no banco 
$sql = "INSERT INTO usuario (nome,nomUsuario,senha,email)
 VALUES ('$nome','$nomUsuario','$senha','$email')";

if ($conn->query($sql) === TRUE) {
    echo "<br><br>";
    echo "Usuario Cadastrado com Sucesso!!!";
     }

    else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }



   
?>