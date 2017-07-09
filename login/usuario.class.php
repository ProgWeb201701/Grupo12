<?php 

require_once("config.php");
class usuario  extends Banco

{
    public $nome;
    public $nomeUsuario;
    public $senha;
    public $email;
    public $idUsuario;

    function __construct($nome, $nomeUsuario, $senha, $email, $idUsuario) {
        $this->nome = $nome;
        $this->nomeUsuario = $nomeUsuario;
        $this->senha = $senha;
        $this->email = $email;
        $this->idUsuario = $idUsuario;
    }

    function getNome() {
        return $this->nome;
    }

    function getNomeUsuario() {
        return $this->nomeUsuario;
    }

    function getSenha() {
        return $this->senha;
    }

    function getEmail() {
        return $this->email;
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNomeUsuario($nomeUsuario) {
        $this->nomeUsuario = $nomeUsuario;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

  public function saveUser($nome,$nomeUsuario,$email,$senha){
      $sql = "INSERT INTO usuario (nome,nomUsuario,senha,email)
 VALUES ('$nome','$nomUsuario','$senha','$email')";
     
      
  }
  

    
}





 ?>
