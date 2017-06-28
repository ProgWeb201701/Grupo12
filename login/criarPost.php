<?php 


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



$nomePost = $_POST['nomePost'];
$idUsuario=$_POST['idUsuario'];
$descricao = $_POST['descricao'];
$CaminhoImagem = $_POST['CaminhoImagem'];
$idTag = $_POST['idTag'];



//Insere Um post no Banco de Dados (Ainda está com problemas)
$sql = "INSERT INTO post ( nomePost, descricao,idUsuario,CaminhoImagem,idTag)
VALUES ('$nomePost', '$descricao','$idUsuario','$CaminhoImagem','idTag')";

if ($conn->query($sql) === TRUE) {
    echo "Post Criado com sucesso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}












 ?>