<?php

namespace App\Models;

class ItemVenda{

    private $item;

    public function getItem()
    {
        return $this->item;
    }

    public function setItem($item)
    {
        $this->item = $item;
    }

}