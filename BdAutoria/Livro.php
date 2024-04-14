<?php

include_once 'Conectar.php';

// atributos
class Livro
{
    private $Codlivro;
    private $Titulo;
    private $Categoria;
    private $ISBN;
    private $Idioma;
    private $QtdePag;
    private $conn;

    //gettes e setter

   public function getCod_Livro() {
         return $this->Codlivro;
   }

   public function setCod_Livro($CodiLivro) {
    $this->Codlivro = $CodiLivro;
   }

   public function gettitulo() {
          return $this->Titulo;
   }

   public function settitulo ($titulolivro) {
    $this->Titulo= $titulolivro;
   }

   public function getcategoria() {
          return $this->Categoria;
   }

   public function setcategoria($categorialivro) {
    $this->Categoria= $categorialivro;
   }

   public function getisbn() {
    return $this->ISBN;
   }

    public function setisbn($isbnlivro) {
    $this->ISBN= $isbnlivro;
    }
    
   public function getidioma() {
    return $this->Idioma;
   }

    public function setidioma($idiomalivro) {
    $this->Idioma= $idiomalivro;
    }
    
   public function getqtdePag() {
    return $this->QtdePag;
   }

    public function setqtdePag($Qtde) {
    $this->QtdePag= $Qtde;
    }

    //métodos


    function alterar(){
        try{
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("select * from livro where Cod_Livro = ?");
            @$sql->bindParam(1, $this->getCod_Livro(), PDO::PARAM_STR);
            $sql->execute();
    
            return $sql->fetchAll();
            $this->conn = null;
        }
    
        catch(PDOException $exc){
            echo "Erro ao alterar. " . $exc->getMessage();
        }
    }
    
    function alterar2(){
        try{
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("update livro set Título = ?, Categoria = ?, ISBN = ?, Idioma = ?, QtdePag = ? where Cod_Livro = ?");
            @$sql-> bindParam(1, $this->gettitulo(), PDO::PARAM_STR);
            @$sql-> bindParam(2, $this->getcategoria(), PDO::PARAM_STR);
            @$sql-> bindParam(3, $this->getisbn(), PDO::PARAM_STR);
            @$sql-> bindParam(4, $this->getidioma(), PDO::PARAM_STR);
            @$sql-> bindParam(5, $this->getqtdePag(), PDO::PARAM_STR);
            @$sql-> bindParam(6, $this->getCod_Livro(), PDO::PARAM_STR);
    
            if ($sql->execute() == 1){
                return "Registro alterado com sucesso!";
            }
            $this->conn = null;
        }
        catch(PDOException $exc){
            echo "Erro ao salvar o registro." . $exc->getMessage();
        }
    }


    function consultar(){
        try{
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("select * from livro where Título like ?");
            @$sql-> bindParam(1, $this->gettitulo(), PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        }
        catch(PDOException $exc){
            echo "Erro ao executar consulta." . $exc->getMessage();
        }
    }

    function exclusao(){
        try{
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("delete from livro where Cod_Livro = ?");
            @$sql-> bindParam(1, $this->getCod_Livro(), PDO::PARAM_STR);
    
            if($sql->execute() == 1){
                return "Excluido com sucesso!";
            }
    
            else{
                return "Erro na exclusao!";
            }
    
            $this->conn = null;
        }
    
        catch(PDOException $exc){
            echo "Erro ao excluir." . $exc->getMessage();
        }
    }
    

   function salvar(){
    try{
        $this->conn = new Conectar();
        $sql = $this->conn->prepare("insert into livro values (null,?,?,?,?,?)");
        //@$sql->bindParam(1, $this->getCodAutor(), PDO::PARAM_STR);
        @$sql->bindParam(1, $this->gettitulo(), PDO::PARAM_STR);
        @$sql->bindParam(2, $this->getcategoria(), PDO::PARAM_STR);
        @$sql->bindParam(3, $this->getisbn(), PDO::PARAM_STR);
        @$sql->bindParam(4, $this->getidioma(), PDO::PARAM_STR);
        @$sql->bindParam(5, $this->getqtdePag(), PDO::PARAM_STR);


        if($sql->execute() == 1){
            return "Registro salvo com sucesso!";
        }
        $this->conn = null;
    }

    catch(PDOException $exc){
         echo "Erro ao salvar o Registro. " . $exc->getMessage();
    }
}

   function listar()
   {
       try
       {
           $this-> conn = new Conectar();
           $sql = $this->conn->query("select * from livro order by Cod_livro");
           $sql->execute();
           return $sql->fetchAll();
           $this->conn = null;
       }
       catch(PDOException $exc)
       {
        echo "Erro ao executar consulta. " . $exc->getMessage();
       }
   }
} 
?>