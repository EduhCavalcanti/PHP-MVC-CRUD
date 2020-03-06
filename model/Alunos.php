<?php

require_once("Banco.php");

class Alunos extends Banco{

  private $nome;
  private $nascimento;

  //Método set
  public function setNome($string){
    $this->nome = $string;
  }
  public function setNascimento($string){
    $this->nascimento = $string;
  }

  //Método get
  public function getNome(){
    return $this->nome;
  }
  public function getNascimento(){
    return $this->nascimento;
  }

  public function incluir(){
    return $this->setAluno($this->getNome(),$this->getNascimento());
  }

}
 

?>
