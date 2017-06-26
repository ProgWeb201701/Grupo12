<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php

#recebendo os campos enviados pela página html

$nome = $_POST['nome'];
$senha = $_POST['senha'];
 

$servername = "localhost";
$username = "root";
$password = "1030";
$dbname = "revistaart";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 

 //Consulta o banco e mostra o usuario

            
      $sql = "SELECT * FROM usuario WHERE nomUsuario = '$nome' AND senha = '$senha'";
      $result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
       echo "<br><br>";
        echo "Nome: " . $row["nome"]. "   <br>     -     IdUsu: " . $row["idUsuario"]. "  -  <br> Usuário :" . $row["nomUsuario"]. "<br><br>";
        
        #se o nome estiver correto, começa a sessão
    session_start();
    # agora cria uma sessão que guardará o nome do usuário
    #( ele poderá navegar por todo o sistema sem que seja preciso perguntar seu nome novamente).
    $_SESSION["nome"]=$nome;

    #header manda o usuário para outra página!
    header("location: inicio.php");

         
    }
} else {
    echo "0 results";
}
       
       $conn->close();
?>

</body>
</html>
    











