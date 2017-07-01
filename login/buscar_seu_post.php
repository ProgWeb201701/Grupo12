<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
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



// $nomePost = $_POST['nomePost'];
// $idUsuario=$_POST['idUsuario'];
// $descricao = $_POST['descricao'];
// $CaminhoImagem = $_POST['CaminhoImagem'];
$idUsuario = $_POST['idUsuario'];




    $sql = "SELECT* FROM post  where idUsuario='idUsuario' ";
    $result = mysqli_query($conn, $sql);






if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

        echo "<br><br>";
        echo "idPost: " . $row["idPost"];
          echo "<br><br>";
        echo "Titulo:".$row["nomePost"];
          echo "<br><br>";
        echo "Descricao:".$row["descricao"];
          echo "<br><br>";
        echo "CaminhoImagem: " . $row["CaminhoImagem"]."--------idTag--".$row["idTag"];
         echo "<br><br>";
         echo "-------------------------------------------------------------------------------------";
         echo "<br><br>";
    }
} else {
    echo "Nenhum  Post encontrado";
   
}


?>

</body>
</html>