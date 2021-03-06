<?php

/**
 * Description of Cheque
 *
 * @copyright (c) year, Ivonilson Cardoso
 */
abstract class Cheque {

    public $Valor;
    public $Tipo;

    function __construct($Valor, $Tipo) {
        $this->Valor = $Valor;
        $this->Tipo = $Tipo;
    }
    
    abstract function calcularJuros();
    
    function verValor() {
        return "Valor do cheque {$this->Tipo}: {$this->Valor}<hr>";
    }

    final function real($Valor) {
        return number_format($Valor, '2', ',', '.');
    }

}
