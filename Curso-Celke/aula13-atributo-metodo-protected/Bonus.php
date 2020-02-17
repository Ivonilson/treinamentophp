<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bonus
 *
 * @author testeAdmim
 */
class Bonus extends FuncionarioProtected {

    public function verSalario() {
        parent::bonus(500);
        return parent::verSalario();
    }

}
