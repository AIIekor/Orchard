<?php

class PearTree extends FruitTree{
	public function getFruit(){
		return new Pear();
	}

	function setFruitCount(){
		$this->minFruitCount = 0;
		$this->maxFruitCount = 20;
	}
}