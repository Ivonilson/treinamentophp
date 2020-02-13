<?php

/**
 * Description of Funcionario
 *
 * @copyright (c) year, Ivonilson Cardoso
 */
class Funcionario {

    public $Nome;
    public $Salario;

    function setNome($Nome) {
        $this->Nome = $Nome;
    }

    function setSalario($Salario) {
        $this->Salario = $Salario;
    }

    public function verSalario() {
        $this->Salario = $this->validarSalario($this->Salario);
        return "O funcionário {$this->Nome} tem o salário de R$ {$this->Salario}";
    }

    public function validarSalario($salario) {
        if (is_numeric($salario) and ( $salario > 0)):
            return $this->Salario = number_format($salario, '2', ',', '.');
        else:
            die('Salário inválido.');
        endif;
    }

}
