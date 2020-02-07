<?php

/**
 * Description of ChequeComum
 *
 * @copyright (c) year, Ivonilson Cardoso
 */
final class ChequeComum extends Cheque {

    function calcularJuros() {
       $this->Valor = $this->Valor * 1.125;
       $this->Valor = parent::real($this->Valor);
       
       return "Valor do Cheque {$this->Tipo}: R$ {$this->Valor}<hr>";
    }
    
     /*function real($Valor) {
        $this->Valor = $Valor + 200;
        return number_format($Valor, '2', ',', '.');
    }*/

}
