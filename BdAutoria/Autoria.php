<?php

include_once 'Conectar.php';

// atributos
class Autoria
{
    private $Cod_Autor;
    private $Cod_Livro;
    private $DataLancamento;
    private $Editora;
    private $conn;

// gettes e setter

   public function getCodAutor() {
         return $this->Cod_Autor;
   }

   public function setCodAutor($Codaut) {
    $this->Cod_Autor = $Codaut;
   }

   public function getCodLivro() {
          return $this->Cod_Livro;
   }

   public function setCodLivro ($CodigoLivro) {
    $this->Cod_Livro= $CodigoLivro;
   }

   public function getdatalancamento() {
          return $this->DataLancamento;
   }

   public function setdatalancamento($dtalan) {
    $this->DataLancamento= $dtalan;
   }

   public function geteditora() {
    return $this->Editora;
   }

    public function seteditora($editoralivro) {
    $this->Editora= $editoralivro;
    }
    
   //métodos


   function alterar(){
    try{
        $this-> conn = new Conectar();
        $sql = $this->conn->prepare("select * from autoria where Cod_Autor = ?");
        @$sql->bindParam(1, $this->getCodAutor(), PDO::PARAM_STR);
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
        $sql = $this->conn->prepare("update autoria set Cod_Livro = ?, DataLancamento = ?, Editora = ? where Cod_Autor = ?");
        @$sql-> bindParam(1, $this->getCodLivro(), PDO::PARAM_STR);
        @$sql-> bindParam(2, $this->getdatalancamento(), PDO::PARAM_STR);
        @$sql-> bindParam(3, $this->geteditora(), PDO::PARAM_STR);
        @$sql-> bindParam(4, $this->getCodAutor(), PDO::PARAM_STR);
        

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
        $sql = $this->conn->prepare("select * from autoria where Editora like ?");
        @$sql-> bindParam(1, $this->geteditora(), PDO::PARAM_STR);
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
        $sql = $this->conn->prepare("delete from autoria where Cod_Autor = ?");
        @$sql-> bindParam(1, $this->getCodAutor(), PDO::PARAM_STR);

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
        $sql = $this->conn->prepare("insert into autoria values (?,?,?,?)");
        @$sql->bindParam(1, $this->getCodAutor(), PDO::PARAM_STR);
        @$sql->bindParam(2, $this->getCodLivro(), PDO::PARAM_STR);
        @$sql->bindParam(3, $this->getdatalancamento(), PDO::PARAM_STR);
        @$sql->bindParam(4, $this->geteditora(), PDO::PARAM_STR);
        


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
           $sql = $this->conn->query("select * from autoria order by Editora");
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