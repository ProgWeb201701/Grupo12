<?php 

$login = $_POST['login'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];
$email = $_POST['email'];




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
 





$query_select = "SELECT nomUsuario FROM usuario WHERE nomUsuario = '$login'";

$array = mysql_fetch_array($select);
$logarray = $array['login'];

  if($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";

    }else{
      if($logarray == $login){

        echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.html';</script>";
        die();

      }else{
        // (`nome`, `idUsuario`, `nomUsuario`, `senha`, `email`)
        $query = "INSERT INTO usuario (nome,idUsuario,nomUsuario,senha,email) VALUES ('nome',AUTO_INCREMENT,'$login','$senha','email')";
        $insert = mysql_query($query,$connect);
        
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
        }
      }
    }
?>