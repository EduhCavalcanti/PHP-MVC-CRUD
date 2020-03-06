<?php

require_once("../model/Alunos.php");
require_once("../model/Disciplina.php");

class listarController{

    private $lista;
    private $listar;

    public function __construct(){
        $this->lista = new Alunos();
        $this->listar = new Disciplina();
        $this->criarTabela();

    }

    private function criarTabela(){
        $row = $this->lista->getAluno();
        $rowD = $this->listar->getDisciplina();
        
        foreach ($row as $value){
            echo "<tr>";
            echo "<td>".$value['nome'] ."</td>";
            echo "<td>".$value['nascimento'] ."</td>";
            echo "<td></td>";
            echo "<td><a class='btn btn-warning' href='editar.php?id=".$value['nome']."'>Editar</a><a class='btn btn-danger' href='../controller/ControllerDeletar.php?id=".$value['nome']."'>Excluir</a></td>";
            echo "</tr>";
        }
        foreach ( $rowD as $value){
            echo "<tr>";
            echo "<td>".$value['disciplina'] ."</td>";
            echo "</tr>";
        }
    }
}



?>
