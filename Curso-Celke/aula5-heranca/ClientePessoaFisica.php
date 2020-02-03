<?php

/**
 * Description of ClientePessoaFisica
 *
 * @copyright (c) year, Ivonilson Cardoso
 */
class ClientePessoaFisica extends Cliente {
    public $Cpf;
    public $Nome;
    
    function setCpf($Cpf) {
        $this->Cpf = $Cpf;
    }

    function setNome($Nome) {
        $this->Nome = $Nome;
    }


}
