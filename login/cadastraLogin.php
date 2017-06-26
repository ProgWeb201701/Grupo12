<?php 

$login = $_POST['login'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];
$email = $_POST['email'];




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
     $sql = "INSERT INTO usuario (nome,nomUsuario,senha,email)
            VALUES ('$nome','$login','$senha','$email')";

if ($conn->query($sql) === TRUE) {
    echo "<br><br>";
    echo "Usuario Cadastrado com Sucesso!!!";
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
        
        
      }
    }
?>