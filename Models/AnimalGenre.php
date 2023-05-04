<?php

class AnimalGenre
{
    public $animalName;
    public $animalWeight;


    function __construct(string $animalName, string $animalWeight,)
    {
        $this->animalName = $animalName;
        $this->animalWeight = $animalWeight;
    }
}
