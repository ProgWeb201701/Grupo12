<?php
ini_set('display_errors', 1);

$mysqli = new mysqli("localhost","root","1030", "revistaart");

$query = "DELETE FROM post WHERE idPost=?";

$stmt = $mysqli->stmt_init();

$stmt->prepare($query);

$stmt->bind_param('i', $id);

$id = $_GET['id'];

$stmt->execute();
$stmt->close();
$mysqli->close();

header("Location: view.php");
exit();

?>



