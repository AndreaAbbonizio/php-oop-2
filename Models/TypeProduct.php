<?php


class TypeProduct
{
    public $typeProduct;
    public $productWeight;
    public $brand;


    function __construct(string $typeProduct, string $productWeight, string $brand)
    {
        $this->typeProduct = $typeProduct;
        $this->productWeight = $productWeight;
        $this->brand = $brand;
    }
}
