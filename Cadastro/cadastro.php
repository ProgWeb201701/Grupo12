<!DOCTYPE HTML>  
<html>
<head>
<meta charset="utf-8">
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $nomeUsuarioErr = $emailErr = $senhaErr = $senhaConfirmaErr = "";
$nome = $nomeUsuario = $email = $senha = $senha_confirma = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nomeErr = "Nome é obrigatório";
  } else {
    $nome = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$nome)) {
      $nomeErr = "Apenas letras e espaços em branco"; 
    }
  }

  if (empty($_POST["Username"])) {
    $nomeUsuarioErr = "Nome de Usuário é obrigatório";
  } else {
    $nomeUsuario = test_input($_POST["Username"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$nomeUsuario)) {
      $nomeUsuarioErr = "Apenas letras e espaços em branco"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    

    if(empty($_POST["senha"])) {
        $senhaErr = "Senha é obrigatória";
        $senhaConfirmaErr  = "Confirme a senha";
         else {
            $senhaErr = "As senhas não conferem!";
        }
        

  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Nome: <input type="text" name="nome" value="<?php echo $nome;?>">
  <span class="error">* <?php echo $nomeErr;?></span>
  <br><br>
  Nome de Usuário: <input type="text" name="nomeUsuario" value="<?php echo $nomeUsuario;?>">
  <span class="error">* <?php echo $nomeUsuarioErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Senha: <input type="password" name="senha" value="<?php echo $senha;?>">
  <span class="error">* <?php echo $senhaErr;?></span> 
  Confirme sua Senha: <input type="password" name="senhaConfirma" value="<?php echo $senhaConfirma;?>">
  <span class="error">* <?php echo $senhaConfirmaErr;?></span> 
  <input type="submit" name="submit" value="Submit"> 
  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $nome;
echo "<br>";
echo $nomeUsuario;
echo "<br>";
echo $email;
echo "<br>";
echo $senha;
echo "<br>";
echo $senhaConfirma;
echo "<br>";

?>

</body>
</html>