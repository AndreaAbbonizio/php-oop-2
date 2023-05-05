<?php

require_once './Models/AnimalGenre.php';

require_once './Models/TypeProduct.php';

require_once __DIR__ . "/../Traits/Discounted.php";


class Product extends Shop
{
    use Discounted;
    public $productName;

    public $price;
    public $inventories;
    public $animalGenre;
    public $typeProduct;
    public $imageProduct;

    function __construct(string $name, string $city, string $workingHours, string $adress, string $productName, float $price, int $inventories, AnimalGenre $animalGenre, TypeProduct $typeProduct, string $imageProduct)
    {
        parent::__construct($name, $city, $workingHours, $adress);

        $this->productName = $productName;
        $this->price = $price;
        $this->inventories = $inventories;
        $this->animalGenre = $animalGenre;
        $this->typeProduct = $typeProduct;
        $this->imageProduct = $imageProduct;
    }
}
