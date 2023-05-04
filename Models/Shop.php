<?php

class Shop
{
    public $name;
    public $city;
    public $workingHours;
    public $adress;


    public function __construct(string $name, string $city, string $workingHours, string $adress)
    {
        $this->name = $name;
        $this->city = $city;
        $this->workingHours = $workingHours;
        $this->adress = $adress;
    }
}
