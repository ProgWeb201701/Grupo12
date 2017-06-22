<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title></title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
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
 
$sql = "SELECT nome, idUsuario, nomUsuario FROM usuario";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
        echo "Nome: " . $row["nome"]. "        -     IdUsu: " . $row["idUsuario"]. "     Usuário :" . $row["nomUsuario"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

</body>
</html>


