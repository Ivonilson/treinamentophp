<?php

/**
 * Description of ClientePessoaJuridica
 *
 * @copyright (c) year, Ivonilson Cardoso
 */
class ClientePessoaJuridica extends Cliente {
   public $Cnpj;
   public $NomeFantasia;
   
   function setCnpj($Cnpj) {
       $this->Cnpj = $Cnpj;
   }

   function setNomeFantasia($NomeFantasia) {
       $this->NomeFantasia = $NomeFantasia;
   }
   
   function verEndereco() {
       return "<p>Endereço da pessoa jurídica.</br> Endereço: {$this->Endereco}<br>Bairro: {$this->bairro}<br>NomeFantasia: {$this->NomeFantasia}</br>CNPJ: {$this->Cnpj}<hr></p>";
   }


}
