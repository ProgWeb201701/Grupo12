
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
 

//if (isset($_POST['cadastrar'])) {
	
	// Recupera os dados dos campos
	$tag = $_POST['idTag'];
	$titulo = $_POST['nomePost'];
	$foto = $_FILES["foto"];
	$descricao = $_POST['descricao'];
	//$idUsuario=$_SESSION['idUsuario'];

	//die("$tag $titulo,$foto,$descricao,$idUsuario");
	
	// Se a foto estiver sido selecionada
	if (!empty($foto["name"])) {
		
		// Largura máxima em pixels
		$largura = 150;
		// Altura máxima em pixels
		$altura = 180;
		// Tamanho máximo do arquivo em bytes
		$tamanho = 1000;
 
		$error = array();
 
    	// Verifica se o arquivo é uma imagem
    	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])){
     	   $error[1] = "Isso não é uma imagem.";
   	 	} 
	
		// Pega as dimensões da imagem
		$dimensoes = getimagesize($foto["tmp_name"]);
	
		// Verifica se a largura da imagem é maior que a largura permitida
		if($dimensoes[0] > $largura) {
			$error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
		}
 
		// Verifica se a altura da imagem é maior que a altura permitida
		if($dimensoes[1] > $altura) {
			$error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
		}
		
		// Verifica se o tamanho da imagem é maior que o tamanho permitido
		if($foto["size"] > $tamanho) {
   		 	$error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
		}
 
		// Se não houver nenhum erro
		if (count($error) == 0) {
		
			// Pega extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
 
        	// Gera um nome único para a imagem
        	$nome_imagem = md5(uniqid(time())) . "." . $ext[1];
 
        	// Caminho de onde ficará a imagem
        	$caminho_imagem = "fotos/" . $nome_imagem;
 
			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($foto["tmp_name"], $caminho_imagem);
		
			// Insere os dados no banco
			// $sql = mysql_query("INSERT INTO post VALUES ( $titulo, $descricao, $idUsuario, $foto, $tag)");
		
			// Se os dados forem inseridos com sucesso
			// if ($sql){
			// 	echo "Você foi cadastrado com sucesso.";
			// }
		//}
	
		// Se houver mensagens de erro, exibe-as
// 		if (count($error) != 0) {
// 			foreach ($error as $erro) {
// 				echo $erro . "<br />";
// 			}
// 		}
// 	}
// }
?>

<!-- <?php 
// Seleciona todos os usuários
//  $sql = "SELECT idPost, nomePost, descricao, idUsuario,CaminhoImagem,idTag FROM post";
//     $result = mysqli_query($conn, $sql);






// if (mysqli_num_rows($result) > 0) {
    // output data of each row
    // while($row = mysqli_fetch_assoc($result)) {

    //     echo "<br><br>";
    //     echo "idPost: " . $row["idPost"];
    //       echo "<br><br>";
    //     echo "Titulo:".$row["nomePost"];
    //       echo "<br><br>";
    //     echo "Descricao:".$row["descricao"];
    //       echo "<br><br>";
       // echo "CaminhoImagem: " . $row["CaminhoImagem"];
        // echo "--------idTag--".$row["idTag"];
         // echo "<br><br>";
         // echo "-------------------------------------------------------------------------------------";
         // echo "<br><br>";
    // }
// } else {
    // echo "Nenhum  Post encontrado";
// }
