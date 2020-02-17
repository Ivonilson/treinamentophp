<?php

/**
 * Description of Funcionario
 *
 * @copyright (c) year, Ivonilson Cardoso
 */
class FuncionarioProtected {

    public $Nome;
    private $Salario;
    protected $Bonus;

    function setNome($Nome) {
        $this->Nome = $Nome;
    }

    function setSalario($Salario) {
        $this->Salario = $Salario;
    }

    function setBonus($Bonus) {
        $this->Bonus = $Bonus;
    }

    public function verSalario() {
        $this->Salario = $this->validarSalario($this->Salario);
        return "O funcionário {$this->Nome} tem o salário de R$ {$this->Salario} e um bônus de {$this->Bonus}";
    }

    private function validarSalario($salario) {
        if (is_numeric($salario) and ( $salario > 0)):
            return $this->Salario = number_format($salario, '2', ',', '.');
        else:
            die('Salário inválido.');
        endif;
    }

    protected function bonus($Bonus) {
        $this->Bonus = $Bonus;
    }

}
