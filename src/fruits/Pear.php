<?php

class Pear extends Fruits{
	public function setWeight(){
		$this -> weight = mt_rand(130,170);
	}
}