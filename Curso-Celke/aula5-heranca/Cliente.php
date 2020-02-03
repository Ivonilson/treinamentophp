<?php

/**
 * Description of Cliente
 *
 * @copyright (c) year, Ivonilson Cardoso
 */
class Cliente {
   public $Endereco;
   public $bairro;
   
   function setEndereco($Endereco) {
       $this->Endereco = $Endereco;
   }

   function setBairro($bairro) {
       $this->bairro = $bairro;
   }

   function verEndereco() {
       return "<p>Endereço: {$this->Endereco}<br>Bairro: {$this->bairro}<hr></p>";
   }
   
}
