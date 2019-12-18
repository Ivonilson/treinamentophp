<?php

/**
 * Description of Nota
 *
 * @copyright (c) year, Ivonilson Cardoso
 */
class Nota {
    public $Aluno;
    public $Disciplina;
    public $Prova;
    public $Trabalho;
    
    function setDisciplina($Disciplina) {
        $this->Disciplina = $Disciplina;
    }

    function setProva($Prova) {
        $this->Prova = $Prova;
    }

    function setTrabalho($Trabalho) {
        $this->Trabalho = $Trabalho;
    }
    
    function setNota($Aluno, $Disciplina, $Prova, $Trabalho){
        $this->Aluno = $Aluno;
        $this->Disciplina = $Disciplina;
        $this->Prova = $Prova;
        $this->Trabalho = $Trabalho;
    }
    
    function getNota(){
        return "Nome do aluno: {$this->Aluno} <br> Disciplina: {$this->Disciplina} <br> Nota: " . ($this->Prova + $this->Trabalho) . "<br><hr>";
    }
}
