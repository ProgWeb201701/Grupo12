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


if (isset($_POST['criar'])) {
// Recupera os dados dos campos
$nomePost = $_POST['nomePost'];
$idUsuario=$_SESSION["idUsuario"];
$descricao = $_POST['descricao'];
$foto =$_FILES['CaminhoImagem'];
$idTag = $_POST['idTag'];


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
		$sql = "INSERT INTO post ( nomePost, descricao,idUsuario,CaminhoImagem,idTag)
			VALUES ('$nomePost', '$descricao','$idUsuario','$CaminhoImagem','idTag')";
			die($sql);
			if ($conn->query($sql) === TRUE) {
   				 echo "Post Criado com sucesso";
			} else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
			}

	
		// Se houver mensagens de erro, exibe-as
		if (count($error) != 0) {
			foreach ($error as $erro) {
				echo $erro . "<br />";
			}
		}
	}
}
?>











<?php
// Seleciona todos os usuários
$sql = mysql_query("SELECT * FROM post ORDER BY nomePost");
 
// Exibe as informações de cada usuário
while ($post = mysql_fetch_object($sql)) {
	//echo "<b>Tag:</b> " . $post->tag; . "<br />";
	// Exibimos a foto
	echo "<img src='fotos/".$post->foto."' alt='Foto de exibição' /><br />";
	// Exibimos o nome e email
	echo "<b>Nome:</b> " . $post->nomePost . "<br />";
	echo "<b>Email:</b> " . $post->descricao . "<br /><br />";
}
?>







