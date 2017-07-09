<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="criarpost.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <style type="text/css">
    .modal {
  text-align: center;
}
@media screen and (min-width: 768px) {
  .modal:before {
    display: inline-block;
    vertical-align: middle;
    content: " ";
    height: 100%;
  }
}
.modal-dialog {
  display: inline-block;
  text-align: left;
  vertical-align: middle;
}
.modal-body{
  text-align: center;
  font-size: 20px;
}
h2{
  text-align: center;
}
.menu{
 position: fixed;
}
.introducao{
  text-align: center;
  font-style: italic;
}
.footer{
  text-align: center;
}
#menu {
  position: fixed;

 
 
}

  </style>

  <script>

</script>

    
  <script src="js/vendor/modernizr-2.6.2.min.js"></script> 
</head>
<body>


<div class="btn-group btn-group-justified"  id="menu" role="group" aria-label="...">
  <div class="btn-group" role="group">
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myCadastro">Cadastrar-se</button>
  </div>
  <div class="btn-group" role="group">
   <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myDestaque">Sobre</button>
  </div>
  <div class="btn-group" role="group">
   <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myLogin">Login</button>
  </div>
</div>






<div id="main">
  
  <!-- <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span> -->
</div>


  <!-- Modal Criar Post -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Criar Post</h4>
        </div>
        <div class="modal-body">
          <p>Crie seu post</p>
          
          <label>Titulo: <input type="text" name="titulo" alt="Titulo do post"></label><br><br><tr></tr>
          <!-- Split button -->
<div class="btn-group">
  <button type="button" class="btn btn-danger">Tag</button>
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="#">Arte</a></li>
    <li><a href="#">Musica</a></li>
    <li><a href="#">Moda</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
          <label>Descrição:<input type="text-field" name="descricao"></label><br><br>
          <label>Selecione uma Imagem: <input type="file" name="img"></label><br><br>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default" data-dismiss="modal" name="criar">CRIAR</button>
        </div>
      </div>
      
    </div>
  </div>
</div>








<!-- Modal de Destaques do dia  -->
  <div class="modal fade" id="myDestaque" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Sobre</h4>
        </div>
        <div class="modal-body">
          <p>Esta aplicação tem por objetivo incentivar a arte e a cultura </p>
  
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Like</button>
        </div>
      </div>
      
    </div>
  </div>
</div>







 <!-- Modal  fazer Login-->
  <div class="modal fade" id="myLogin" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login/Cadastre-se</h4>
        </div>
         <h2>Login </h2>
        <div class="modal-body"> Faça Login e explore mais a revista</p>
          <form action="login.php" method="POST">
               
                <input type="text" placeholder="Nome" name="nome" autofocus/><br><br>
                <input type="password" placeholder="Senha" name="senha" /><br><br>
                <button type="submit" value="entrar" id="entrar" name="Entrar">Entrar</button><br>
            </form>  
          
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">fechar
        </div></button>
        </div>
      </div>
      
    </div>
  </div>
</div>







<!-- Modal  Cadastrar-se   -->
  <div class="modal fade" id="myCadastro" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content"  >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cadastre-se</h4>
        </div>
         <h2>Cadastro </h2>
        <div class="modal-body"> Mostre seu ponto de vista faça POSTS</p>
          <form action="cadastraLogin.php" method="POST">


               
                <input type="text" placeholder="Nome"  name="nome" required="Preencha com seu nome completo" autofocus/><br><br>
                <input type="text" placeholder="Nome de Usuário" name="login" required="Preencha o nome de Usuário" autofocus/><br><br>
                <input type="email" placeholder="email" name="email"  required ><br><br>
                <input type="password" placeholder="Senha" name="senha"  required /><br><br>
                <input type="submit" value="entrar"  id="entrar" name="Enviar"><br>
                <!--  <button type="button" class="btn btn-default" data-dismiss="modal"><a href="#myCadastro"></a>Enviar</button> -->
            </form>  
          
        </div>
        <div class="modal-footer">
         
        </div>
      </div>
      
    </div>
  </div>
</div>








<div class="w3-content w3-container w3-padding-64" id="portfolio">
  <h1 class="w3-center">Revista de Art</h1>
  <p class="w3-center" class="introducao"><em><b>Cadastre-se e divulgue seu trabalho.<br> Inspire novas ideias</b></em></p><br>

<!-- <b></b> -->
<div class="jumbotron">
 
  <p> <img src="./imagens/1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Criar"></p>
   <h2 style="text-align: center;">Post destaque da página</h2>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Ler mais</a></p>
</div>





  
 <div class="w3-row-padding w3-center">
   <div class="w3-col m3">
      <img src="./imagens/1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Quiet ocean">
    </div>

    <div class="w3-col m3">
      <img src="./imagens/1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Quiet ocean">
    </div>

    <div class="w3-col m3">
      <img src="./imagens/1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Quiet ocean">
    </div>

    <div class="w3-col m3">
      <img src="./imagens/1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Quiet ocean">
    </div>
  </div>
  <br><br>

  <div class="w3-row-padding w3-center w3-section">
   <div class="w3-col m3">
      <img src="./imagens/1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Quiet ocean">
    </div>

    <div class="w3-col m3">
      <img src="./imagens/1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Quiet ocean">
    </div>

    <div class="w3-col m3">
      <img src="./imagens/1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Quiet ocean">
    </div>

    <div class="w3-col m3">
      <img src="./imagens/1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Quiet ocean">
    </div>
    <button class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px">Carregar Posts</button>
  </div>
</div>
















<!--  Rodapé do trabalho -->
  <footer class="footer">
 <div class="well well-lg"><p>2017. Revista Digital</p>
      <small class="creditos">Criado pelas Academicas de Engenharia de Software Amanda Lopes e Esther Faveiro</a>. Para a disciplina de Programação para Web</a>.<br><br> Orientador do trabalho Professor Maicon Bernadino da Silveira <br><br>
      Universidade Federal do Pampa (Unipampa) </small></div>
 </footer>



</body>
</html>
