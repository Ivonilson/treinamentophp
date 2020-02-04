<?php

/**
 * Description of ClientePessoaFisica
 *
 * @copyright (c) year, Ivonilson Cardoso
 * 
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

    function verEndereco() {
        return "<p>Endereço da pessoa física.</br> Endereço: {$this->Endereco}<br>Bairro: {$this->bairro}<br>Nome: {$this->Nome}</br>CPF: {$this->Cpf}<hr></p>";
    }
}
