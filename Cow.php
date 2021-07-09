<?php

class Cow extends Animal {
	public $name = 'Корова';
	public $typeProduction = 'Молоко, л';

	public function getProduction() {
		return rand(8, 12);
	}
}

?>