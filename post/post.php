<?php
 echo $_FILES['arquivo']['tmp_name']; // Nome temporário do arquivo
 echo $_FILES['arquivo']['name']; // Nome original do arquivo (apenas o nome)
 
 $pasta = "uploads/"; // Pasta a enviar
$pasta = $pasta . basename( $_FILES['arquivo']['name'] ); 

move_uploaded_file($_FILES['arquivo']['tmp_name'], $pasta); // Move o arquivo para a pasta
?>