<?php 


class post

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
    //pega os valores do post
    public function getDescricao() {
        return $this->descricao;
    }

    public function getImagen() {
        return $this->imagem;
    }

    public function isAutorId() {
        return $this->autorId;
    }

//pega um usuario com base no id
    public function get($id){ 
        $sql = "SELECT `descricao`, `imagem`, `autorId`, `dataCriacao`, `ext`, `denuncias`, `likes` 
                FROM `posts` 
                WHERE `id` = '$id'";
        $result = parent::executaQuery($sql);
        $row = mysqli_fetch_object ( $result );
        return $row;
    }

    //função para deletar TODOS os post do usuario
    public function delete($id) {
        $sql = "delete from `posts` where `autorId` = '$id'"; 
        return parent::executaQuery($sql);
    }

    //função para deletar UM post
     public function deletePost($id) {
        $sql = "delete from `posts` where `id` = '$id'"; 
        return parent::executaQuery($sql);
    }

}





 ?>
