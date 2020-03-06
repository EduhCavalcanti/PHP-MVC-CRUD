<?php

require_once("../model/Alunos.php");
require_once("../model/Disciplina.php");

class CadastroController{
  
  private $cadastro;
  private $disciplina;

  public function __construct(){
    $this->cadastro = new Alunos();
    $this->disciplina = new Disciplina();
    $this->incluir();
    $this->incluird();
  } 

  private function incluir(){
    $this->cadastro->setNome($_POST['nome']);
    $this->cadastro->setNascimento($_POST['nascimento']);
    $result = $this->cadastro->incluir();
    if($result >= 1){
        echo "<script>alert('Registro incluído com sucesso!');document.location='../view/cadastro.php'</script>";
    }else{
        echo "<script>alert('Erro ao gravar registro!, verifique se o Aluno não está duplicado');history.back()</script>";
    }
  }

  private function incluird(){
    $this->disciplina->setNomed($_POST['disciplina']);
    $result = $this->disciplina->incluird();
    if($result >= 1){
        echo "<script>alert('Registro incluído com sucesso!');document.location='../view/cadastro.php'</script>";
    }else{
        echo "<script>alert('Erro ao gravar registro!, verifique se o Aluno não está duplicado');history.back()</script>";
    }
  }
  
}
new cadastroController();

?>