<?php

abstract class Fruits
{
    protected string $weight;
    
    public function __construct()
    {
        $this->setWeight();
    }

    abstract function setWeight();

    function getWeight(){
        return $this->weight;
    }
}