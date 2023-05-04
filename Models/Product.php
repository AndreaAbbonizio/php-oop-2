<?php


class Product extends Shop
{
    public $productName;

    public $price;
    public $inventories;
    public $discount = 0;
    public $animalGenre;
    public $typeProduct;
    public $imageProduct;

    function __construct(string $name, string $city, string $workingHours, string $productName, float $price, int $inventories, AnimalGenre $animalGenre, TypeProduct $typeProduct, string $imageProduct)
    {
        parent::__construct($name, $city, $workingHours);

        $this->productName = $productName;
        $this->price = $price;
        $this->inventories = $inventories;
        $this->animalGenre = $animalGenre;
        $this->typeProduct = $typeProduct;
        $this->imageProduct = $imageProduct;


        $this->setDiscount();
    }

    public function setDiscount()
    {
        if ($this->inventories > 10) {
            $this->discount = 20;
        }
    }
}
