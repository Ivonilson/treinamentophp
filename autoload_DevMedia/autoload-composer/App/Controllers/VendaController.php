<?php

namespace App\Controllers;

use \App\Models\Venda;
use \App\Models\ItemVenda;

class VendaController{

    public function index()
    {
        $venda = new Venda();
        $venda->setCodigo(123);
        $venda->setData(date('d/m/Y'));

        echo "<h1>Venda Código: " . 
                $venda->getCodigo() .
                " - Data: " .
                $venda->getData() .
         "</h1>";

        $compra = new ItemVenda();
        $compra->setItem("Computador UltraMega");

        echo "<h2>Item da Venda: " . $compra->getItem() . "</h2>";

    }

}