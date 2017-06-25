<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title></title>
		<meta charset="utf-8"/>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>

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
 

 //Consulta o banco e mostra os usuarios
$sql = "SELECT nome, idUsuario, nomUsuario FROM usuario";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
       echo "<br><br>";
        echo "Nome: " . $row["nome"]. "   <br>     -     IdUsu: " . $row["idUsuario"]. "  -  <br> Usuário :" . $row["nomUsuario"]. "<br><br>";
         
    }
} else {
    echo "0 results";
}



//Insere Um post no Banco de Dados (Ainda está com problemas)
// $sql = "INSERT INTO post ( nomePost, descricao, idUsuario,CaminhoImagem,idTag)
// VALUES ('Amanda', 'Leoa',1,'c:/amanda/Kobus','3')";

// if ($conn->query($sql) === TRUE) {
//     echo "Post Criado com sucesso";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }





//Consulta o banco e mostra todos os posts existentes no banco
//     $sql = "SELECT idPost, nomePost, descricao, idUsuario,CaminhoImagem,idTag FROM post";
// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//     // output data of each row
//     while($row = mysqli_fetch_assoc($result)) {
//         echo "<br><br>";
//         echo "idPost: " . $row["idPost"];
//           echo "<br><br>";
//         echo "Titulo:".$row["nomePost"];
//           echo "<br><br>";
//         echo "Descricao:".$row["descricao"];
//           echo "<br><br>";
//         echo "CaminhoImagem: " . $row["CaminhoImagem"]."--------idTag--".$row["idTag"];
//          echo "<br><br>";
//          echo "-------------------------------------------------------------------------------------";
//          echo "<br><br>";
//     }
// } else {
//     echo "Nenhum  Post encontrado";
// }



//Consulta os posts pelo id do Usuario
//     $sql = "SELECT idPost, nomePost, descricao, idUsuario,CaminhoImagem,idTag FROM post Where idUsuario='1'";
// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//     // output data of each row
//     while($row = mysqli_fetch_assoc($result)) {
//         echo "<br><br>";
//         echo "idPost: " . $row["idPost"];
//           echo "<br><br>";
//         echo "Titulo:".$row["nomePost"];
//           echo "<br><br>";
//         echo "Descricao:".$row["descricao"];
//           echo "<br><br>";
//         echo "CaminhoImagem: " . $row["CaminhoImagem"]."--------idTag--".$row["idTag"];
//          echo "<br><br>";
//          echo "-------------------------------------------------------------------------------------";
//          echo "<br><br>";
//     }
// } else {
//     echo "Nenhum  Post encontrado";
// }




//Faz consulta no banco pelo titulo do post
//     $sql = "SELECT idPost, nomePost, descricao, idUsuario,CaminhoImagem,idTag FROM post where nomePost = 'Desenho Realista'";
// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//     // output data of each row
//     while($row = mysqli_fetch_assoc($result)) {
//         echo "<br><br>";
//         echo "idPost: " . $row["idPost"];
//           echo "<br><br>";
//         echo "Titulo:".$row["nomePost"];
//           echo "<br><br>";
//         echo "Descricao:".$row["descricao"];
//           echo "<br><br>";
//         echo "CaminhoImagem: " . $row["CaminhoImagem"]."--------idTag--".$row["idTag"];
//          echo "<br><br>";
//          echo "-------------------------------------------------------------------------------------";
//          echo "<br><br>";
//     }
// } else {
//     echo "Nenhum  Post encontrado";
// }


//Consulta post por determinada tag
//     $sql = "SELECT idPost, nomePost, descricao, idUsuario,CaminhoImagem,idTag FROM post where idtag = '5'";
// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//     // output data of each row
//     while($row = mysqli_fetch_assoc($result)) {
//         echo "<br><br>";
//         echo "idPost: " . $row["idPost"];
//           echo "<br><br>";
//         echo "Titulo:".$row["nomePost"];
//           echo "<br><br>";
//         echo "Descricao:".$row["descricao"];
//           echo "<br><br>";
//         echo "CaminhoImagem: " . $row["CaminhoImagem"]."--------idTag--".$row["idTag"];
//          echo "<br><br>";
//          echo "-------------------------------------------------------------------------------------";
//          echo "<br><br>";
//     }
// } else {
//     echo "Nenhum  Post encontrado";
// }













//Insere  uma tag no Banco de dados
// $sql = "INSERT INTO tagpost (idTag, nomTag)
// VALUES (15, 'Mecânica')";

// if ($conn->query($sql) === TRUE) {
//     echo "<br><br>";
//     echo "Tag Criada com Sucesso!!!";
   
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

//Consulta  as Tag no dados no banco

// $sql = "SELECT idTag, nomTag FROM tagpost";
// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//     // output data of each row
//     while($row = mysqli_fetch_assoc($result)) {
//         echo "<br><br>";
//         echo "IDTAG: " . $row["idTag"];
//         echo "<br><br>";
//          echo "NomeTag:".$row["nomTag"];
//            echo "<br><br>";
//          echo "---------------------------------------------";
//          echo "<br><br>";
       
//     }
// } else {
//     echo "0 results";
// }
















$conn->close();
?>

</body>
</html>


