<?php

class Shop
{
    public $name;
    public $city;
    public $workingHours;


    public function __construct(string $name, string $city, string $workingHours)
    {
        $this->name = $name;
        $this->city = $city;
        $this->workingHours = $workingHours;
    }
}
