<?php

require_once("Banco.php");

class Disciplina extends Banco{

  private $nomed;

  //Método set
  public function setNomed($stringd){
    $this->nomed = $stringd;
  }
  // public function setNascimento($string){
  //   $this->nascimento = $string;
  

  //Método get
  public function getNomed(){
    return $this->nomed;

  // }
  // public function getNascimento(){
  //   return $this->nascimento;
  }

  public function incluird(){
    return $this->setDisciplina($this->getNomed());
  }

}


?>