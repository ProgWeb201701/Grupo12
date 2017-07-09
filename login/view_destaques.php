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
  /*font-size: 20px;*/
}
/*h2{
  text-align: center;
}*/
.btn btn-info btn-lg{
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



    $(document).ready(function(e){
    	//da maneira que voces fizeram tem um evento que o BOOTSTRAP inicia que pode usar para carregar o html
    	//é algo parecido com isso, ai os dados ali
    	$("#myDestaque").on("show.bs.modal", function(event){
    		var modal = $("#myDestaque");
    		modal.find(".modal-body").load("./htmlinternodomodal.html", dados);
    	});
    })

</script>

    
  <script src="js/vendor/modernizr-2.6.2.min.js"></script> 
</head>
<body>
<div id="main" >

</div>



<!-- <div class="btn-group btn-group-justified"  class="menu" role="group" id="menu" aria-label="...">
  <div class="btn-group" role="group">
   <button type="button" class="btn btn-info btn-lg" ><a href="homeLogado.html">Principal</a></button>
  </div>
  <div class="btn-group" role="group">
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Criar Post</button>
  </div>
   <div class="btn-group" role="group">
   <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target=""><a href="seusPosts.html">
   Seus Posts</a></button>
  </div>
  <div class="btn-group" role="group"> -->

   <!-- aqui tem q passar o id do usuario e dai la no modal buscar os posts e mostrar, eu n faria, eu faria uma pagina e carregaria cada post
   em um modal, mas como faz aqui faz em um pagina separado, então vou mostrar e dai vocês tentam ai  -->
  <!--  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target=""><a href="destaques.html">
   Destaques</a></button>


  </div>
  <div class="btn-group" role="group">
 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target=""><a href="sair.php">Sair</a></button>
  </div>
</div>

 -->
 <div class="btn-group btn-group-justified"  class="menu" role="group" id="menu" aria-label="...">
 <div class="btn-group" role="group">
 <!--   <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target=""><a href="homeLogado.html"> -->
 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target=""><a href="view.php">Principal</a></button>
  </div>
  <div class="btn-group" role="group">
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal_post">Criar Post</button>
  </div>
 <!--  <div class="btn-group" role="group"> 
   <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target=""><a href="view_seusposts.php">
   Seus Posts</a></button>
 </div> -->
  <div class="btn-group" role="group"> 

   <!-- aqui tem q passar o id do usuario e dai la no modal buscar os posts e mostrar, eu n faria, eu faria uma pagina e carregaria cada post
   em um modal, mas como faz aqui faz em um pagina separado, então vou mostrar e dai vocês tentam ai  -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target=""><a href="view_destaques.php">
   Seus Posts</a></button>



  </div>
  <div class="btn-group" role="group">
   <button type="button" class="btn btn-info btn-lg"  ><a href="sair.php">Sair</a>  </button>
  </div>
</div>











  
 
</div>







<<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal_post">Criar Post</button>


<div class="modal fade" id="modal_post" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <form  action="./uploads/upload.php" method="post" enctype="multipart/form-data">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">
                        Criar Post
                    </h4>
                </div>
                 
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12 col-md-1 col-lg-2"></div>
                        <div class="col-xs-12 col-md-10 col-lg-8">
                            <div class="form-group">
                           
                               
                                <label>Titulo: <input type="text" class="form-control" name="nomePost"  size="140" placeholder="Titulo" aria-describedby="sizing-addon1"></label>
                                <label for="descricao"   class="control-label">Descrição</label>
                                <textarea id="descricao"     name="descricao"class="form-control" rows="3" placeholder="Ex: Inspire-se crie seu post agora"></textarea>
                            </div>
                             <div class="form-group" id="idtag">
                              <label><input type="radio"  id="idtag" value="1" name="tag">Moda</label>
                       <label>      <input type="radio"  id="idtag"  value="2" name="tag">Arte</label>
                          <label> <input type="radio"  id="idtag" value="3" name="tag">Desenho</label>
                             <div>
                            <div class="form-group" id="postImagem">
                                <div >
                                    <label for="imagem">Carregar imagem</label>
                                    <input  type="file" name="fileToUpload" id="fileToUpload">
                                    <!-- <p class="help-block">Faça upload de imagens .PNG ou .JPG com tamanho de 2mb no maximo!</p> -->
                                </div>
                            </div>
                          
                        </div>
                        <div class="col-xs-12 col-md-1 col-lg-2"></div>
                       </div>
                </div><div class="modal-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                              
                               <input type="submit" value="Upload Image" name="submit">   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>



















 <!-- Modal  fazer Login-->
  <div class="modal fade" id="myLogin" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Seus Posts</h4>
        </div>
         <h2 style="text-align: center;">Seus posts </h2>
        <div class="modal-body"> Crie mais posts, mostre aos outros seu ponto de vista</p>
           
          
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal"><a href="#myCadastro"></a>Fechar
        </div></button>
        </div>
      </div>
      
    </div>
  </div>
</div>







<!-- Modal  Cadastrar-se   -->
  <div class="modal fade" id="sair" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Sair</h4>
        </div>
         <!-- <h2>Cadastro </h2> -->
        <div class="modal-body"> Deseja realmente se deslogar do sistema?</p>
         
             
                <!-- <input type="submit" value="entrar" id="entrar" name="Enviar"><br> -->
                 <button type="button" class="btn btn-default" data-dismiss="modal"><a href="sair.php"></a>Sair</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            
          
        </div>
        <div class="modal-footer">
         
        </div>
      </div>
      
    </div>
  </div>
</div>








<div class="w3-content w3-container w3-padding-64" id="portfolio">
  <h1 class="w3-center">Revista de Art</h1>
  <p class="w3-center" class="introducao"><em><b>A criatividade inspira, colabore  e ajude a desenvolver a  arte.<br> Inspire, pense e  crie novas ideias<br> Trabalhe com o que você gosta e seja mais feliz!!</b></em></p><br>

<h2  class="w3-center" class="introducao"> Seus Posts</h2>

<?php
ini_set('display_errors', 1);


$mysqli = new mysqli("localhost","root","1030", "revistaart");
// $query = "SELECT p.idpost,p.nomePost, p.descricao,u.nome,u.idUsuario,tp.nomTag,u.idUsuario FROM post AS p join usuario AS u
// ON p.idUsuario=u.idUsuario join tagpost AS tp  ON p.idTag=tp.idTag   
// ORDER BY idpost";
//Fazer um select que mostre todos os post do usuario sessao


$query = "SELECT p.idpost,p.nomePost, p.descricao,t.nomTag, u.nomUsuario FROM post  AS p  join  tagpost AS t ON p.idTag=t.idTag join usuario AS u 
ON P.idUsuario=u.idUsuario
-- WHERE P.idUsuario=u.idUsuario
 ORDER BY p.idpost";

$result = $mysqli->query($query,MYSQLI_STORE_RESULT);
echo "<table class='table table-striped table-responsive table-condensed'>";
echo "<tr><th>id</th><th>Titulo</th><th>Descrição</th><th></th>";
while (list($idpost, $nomePost, $descricao,$nomUsuario) = $result->fetch_row()) {
  
    echo "<tr><td>$idpost</td><td>$nomePost</td><td>$descricao</td><td>$nomUsuario</td>";
    echo "<td>
     <a class='btn btn-default btn-sm' title='Editar' href='editePost.php?id=$id'><i class='glyphicon glyphicon-edit'></i></a>
  <a class='btn btn-default btn-sm' title='Excluir' href='delete.php?id=$id'><i class='glyphicon glyphicon-trash'></i></a></td>";;
    echo "<tr>";
}
echo "<tr><td colspan='3'>Total de registros</td><td>$mysqli->affected_rows</td></tr>";
echo "</table>";
$result->close();
?>
  <div class="">
    <a href="create.php" class="btn btn-success">Cadastrar</a>
  </div>






<!--  Rodapé do trabalho -->
  <footer class="footer">
 <div class="well well-lg"><p>2017. Revista Digital</p>
      <small class="creditos">Criado pelas Academicas de Engenharia de Software Amanda Lopes e Esther Faveiro</a>. Para a disciplina de Programação para Web</a>.<br><br> Orientador do trabalho Professor Maicon Bernadino da Silveira <br><br>
      Universidade Federal do Pampa (Unipampa) </small></div>
 </footer>


</body>
</html>
