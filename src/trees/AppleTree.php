<?php

class AppleTree extends FruitTree{
	public function getFruit(){
		return new Apple();
	}

	function setFruitCount(){
		$this->minFruitCount = 40;
		$this->maxFruitCount = 50;
	}
}