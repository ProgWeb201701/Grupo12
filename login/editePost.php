<?php
ini_set('display_errors', 1);
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$mysqli = new mysqli("localhost","root","1030", "revistaart");
	$query = "UPDATE post SET nomePost=?, idTag=?, descricao=? WHERE idPost=?";




	$stmt = $mysqli->stmt_init();
	$stmt->prepare($query);
	$stmt->bind_param('ssdi', $nomePost, $idTag, $descricao);
	$titulo = $_POST['nomePost'];
	$tag = $_POST['idTag'];
	$descricao = $_POST['descricao'];
	$id = $_POST['idPost'];
	
	$stmt->execute();
	$stmt->close();
	$mysqli->close();
	// echo $sku, $name, $price, $id;
	// die("Morreu Silvio!");
	header("Location: view.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="criarpost.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">





   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
	<script type="text/javascript">
		$(document).ready(function($) {
			
		});
	</script>
</head>
<body>
<?php
ini_set('display_errors', 1);
$mysqli = new mysqli("localhost","root","1030", "revistaart");
$id = $_GET['idPost'];
$query = "SELECT nomePost, descricao, idTag FROM post WHERE idPost=$id";
$result = $mysqli->query($query,MYSQLI_STORE_RESULT);
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		$titulo = $row['nomePost'];
		$descricao = $row['descricao'];
		$idTag = $row['idTag'];
	}
}
?>

<div class="container">

	<button style="font-size:25px" ><a href="view.php"> <i class="fa fa-chevron-circle-left"></i></a></button>




	<h2>Editar Post</h2>
	<form method="POST" action="edit.php">
	<input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
	<div class="editor-label"><label>Titulo:</label></div>
	<div class="editor-field"><input type="text" name="sku" value="<?php echo htmlspecialchars($titulo); ?>"></div>
	<div class="editor-label"><label>Descrição:</label></div>



<input   class="editor-field" type="text" name="name" value="<?php echo htmlspecialchars($descricao); ?>">
	<!-- <div class="editor-field"><input type="text" name="name" value="<?php echo htmlspecialchars($descricao); ?>"></div> -->
	<div class="editor-label"><label>Tag:</label></div>
	<div class="editor-field"><input type="text" name="price" value="<?php echo htmlspecialchars($idTag); ?>"></div>
	<br>
	<div class="editor-field">
		 <button id="save" name="save" type="submit" class="btn btn-success" value='Atualizar'>Salvar
		 <i class='glyphicon glyphicon-floppy-disk'></i>
		 </button>
	</div>
	</form>
</div>
</body>
</html>










