<?php


trait Discounted
{
    protected $discount = 0;



    public function setDiscount($inventories)
    {
        if ($this->inventories > 10 & $this->inventories < 100) {
            $this->discount = 20;
        } else if ($this->inventories > 100) {
            throw new Exception("Numero prodotti nell'inventario errato, non posso calcolare la ");
        }
    }

    public function getDiscount()
    {
        return $this->discount;
    }
}
