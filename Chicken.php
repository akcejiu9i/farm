<?php

class Chicken extends Animal {
	public $name = 'Курица';
	public $typeProduction = 'Яйца, шт';


	public function getProduction() {
		
		return rand(0, 1);
	}
}

?>