<?php

$nomePost = $_POST['nomePost'];
// $idUsuario=$_SESSION["idUsuario"];
$idUsuario=1;
$descricao = $_POST['descricao'];
// $foto =$_FILES['CaminhoImagem'];
$idTag = $_POST['idTag'];



$target_dir = "./uploads";
$pasta_dir = "uploads/".$_FILES["fileToUpload"]["name"];

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
echo $target_file;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Arquivo não é uma imagem.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Desculpe, O arquivo já existe.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000) {
    echo "Desculpe, Sua imagem é muito grande.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}



// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Desculpe, seu arquivo não foi carregado.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " Upload efetuado com sucesso.";
    
        

    } else {
        echo "Desculpe,mas  houve algum erro  no carregamento do arquivo.";
    }
}



//  $nomePost = $_POST['nomePost'];
// $descricao = $_POST['descricao'];
// $CaminhoImagem = $_POST['CaminhoImagem'];
// $idTag = $_POST['Tag'];
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


// Insere Um post no Banco de Dados (Ainda está com problemas)
$sql = "INSERT INTO post ( nomePost, descricao,idUsuario,CaminhoImagem,idTag)
VALUES ('$nomePost', '$descricao',$idUsuario,'$target_file','$idTag')";

if ($conn->query($sql) === TRUE) {
    echo "Post Criado com sucesso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>