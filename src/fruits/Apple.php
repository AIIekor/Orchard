<?php

class Apple extends Fruits{
	public function setWeight(){
		$this -> weight = mt_rand(150,180);
	}
}