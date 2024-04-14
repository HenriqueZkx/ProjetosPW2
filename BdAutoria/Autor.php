<?php

include_once 'Conectar.php';

// atributos
class Autor
{
    private $CodAutor;
    private $NomeAutor;
    private $SobreN;
    private $Email;
    private $Nasc;
    private $conn;

// gettes e setter

   public function getCodAut() {
         return $this->CodAutor;
   }

   public function setCodAut($codigoaut) {
    $this->CodAutor = $codigoaut;
   }

   public function getNomeAut() {
          return $this->NomeAutor;
   }

   public function setNomeAut ($nomeautor) {
    $this->NomeAutor= $nomeautor;
   }

   public function getSobrenome() {
          return $this->SobreN;
   }

   public function setSobrenome($sobren) {
    $this->SobreN= $sobren;
   }

   public function getemail() {
    return $this->Email;
   }

    public function setemail($emailautor) {
    $this->Email= $emailautor;
    }
    
   public function getNascimento() {
    return $this->Nasc;
   }

    public function setNascimento($nascimento) {
    $this->Nasc= $nascimento;
    }

    //métodos


    function alterar(){
        try{
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("select * from autor where Cod_Autor = ?");
            @$sql->bindParam(1, $this->getCodAut(), PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        }
        catch (PDOException $exc)
        {
            echo "Erro ao alterar." . $exc->getMessage();
        }
    }

    function alterar2(){
        try{
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("update autor set NomeAutor = ?, Sobrenome = ?, Email = ?, Nasc = ? where Cod_Autor = ?");
            @$sql->bindParam(1, $this->getNomeAut(), PDO::PARAM_STR);
            @$sql->bindParam(2, $this->getSobrenome(), PDO::PARAM_STR);
            @$sql->bindParam(3, $this->getemail(), PDO::PARAM_STR);
            @$sql->bindParam(4, $this->getNascimento(), PDO::PARAM_STR);
            @$sql->bindParam(5, $this->getCodAut(), PDO::PARAM_STR);
            if($sql->execute() == 1){
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
            $sql = $this->conn->prepare("select * from autor where NomeAutor like ?");
            @$sql-> bindParam(1, $this->getNomeAut(), PDO::PARAM_STR);
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
            $sql = $this->conn->prepare("delete from autor where Cod_Autor = ?");
            @$sql-> bindParam(1, $this->getCodAut(), PDO::PARAM_STR);

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
            $sql = $this->conn->prepare("insert into autor values (null,?,?,?,?)");
            //@$sql->bindParam(1, $this->getCodAutor(), PDO::PARAM_STR);
            @$sql->bindParam(1, $this->getNomeAut(), PDO::PARAM_STR);
            @$sql->bindParam(2, $this->getSobrenome(), PDO::PARAM_STR);
            @$sql->bindParam(3, $this->getemail(), PDO::PARAM_STR);
            @$sql->bindParam(4, $this->getNascimento(), PDO::PARAM_STR);

            if($sql->execute() == 1){
                return "Registro salvo com sucesso!";
            }
            $this->conn = null;
        }catch(PDOException $exc){
            echo "Erro ao salvar o Registro. " . $exc->getMessage();
        }
    }


   function listar()
   {
       try
       {
           $this-> conn = new Conectar();
           $sql = $this->conn->query("select * from autor order by Cod_Autor");
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