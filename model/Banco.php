<?php 

require_once("../init.php");

class Banco{

  protected $mysqli;

  public function __construct(){
    $this->conexao();
  }
  //Conexão com o banco de dados 
  private function conexao(){
    $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
  }
  //Cadastra alunos
  public function setAluno($nome,$nascimento){
    $stmt = $this->mysqli->prepare("INSERT INTO alunos (`nome`, `nascimento`) VALUES (?,?)");
    $stmt->bind_param("ss",$nome,$nascimento);
     if( $stmt->execute() == TRUE){
        return true ;
    }else{
        return false;
    }
  }
  //Cadastro da Disciplina
  public function setDisciplina($nomed){
    $stmt = $this->mysqli->prepare("INSERT INTO disciplina (`disciplina`) VALUES (?)");
    $stmt->bind_param("s",$nomed);
     if( $stmt->execute() == TRUE){
        return true ;
    }else{
        return false;
    }
  }

  //Pegar todos os alunos dentro de um array
  public function getAluno(){
    $result = $this->mysqli->query("SELECT * FROM alunos");
    while($row = $result->fetch_array(MYSQLI_ASSOC)){
        $array[] = $row;
    }
    return $array;
  }

  //Pegar todas as disciplinas
  public function getDisciplina(){
    $resultD = $this->mysqli->query("SELECT * FROM disciplina");
    while($rowD = $resultD->fetch_array(MYSQLI_ASSOC)){
      $array[] = $rowD;
    }
    return $array;
  }

}


?>