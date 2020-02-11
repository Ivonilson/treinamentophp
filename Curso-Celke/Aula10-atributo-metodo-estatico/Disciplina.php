<?php

/**
 * Description of Disciplina
 *
 * @copyright (c) year, Ivonilson Cardoso
 */
class Disciplina {

    public $Aluno;
    public $NotaTrabalho;
    public $NotaProva;
    public static $Media;

    function __construct($Aluno, $NotaTrabalho, $NotaProva) {
        $this->Aluno = $Aluno;
        $this->NotaTrabalho = $NotaTrabalho;
        $this->NotaProva = $NotaProva;
        self::$Media = ($this->NotaProva + $this->NotaTrabalho) / 2;
    }

    function situacao() {
        if (self::$Media >= 7):
            return "Aluno(a) {$this->Aluno} está <b>Aprovado</b> com média " . self::$Media . "<hr>";
        else:
            return "Aluno(a) {$this->Aluno} está <b>Reprovado</b> com média " . self::$Media . "<hr>";
        endif;
    }

    static function situacaoAluno() {
        if (self::$Media >= 7):
            return "média " . self::$Media . "<hr>";
        else:
            return "média " . self::$Media . "<hr>";
        endif;
    }

}
