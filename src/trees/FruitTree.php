<?php

abstract class FruitTree
{
	protected int $minFruitCount;
	protected int $maxFruitCount;

  	public function __construct()
    {
        $this->setFruitCount();
    }

	abstract public function getFruit();

    public function harvest()
    {
        $countFruits = mt_rand($this->minFruitCount, $this->maxFruitCount);
        $basket = [];
        for($i = 0; $i < $countFruits; $i++)
        {
            $basket[] = $this->getFruit();
        }
        return $basket;
    }

    abstract protected function setFruitCount();
}