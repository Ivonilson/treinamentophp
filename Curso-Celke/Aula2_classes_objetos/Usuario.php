<?php

/**
 * Description of Usuario
 *
 * @copyright (c) year, Ivonilson Cardoso
 */
class Usuario {
    public $Nome;
    public $Email;
    
    function getDadosUser($Nome, $Email){
        return "O usuário {$Nome} tem o e-mail {$Email}";
    }
}
