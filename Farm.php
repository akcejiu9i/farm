<?php

class Farm {
	private $animals = [];
	private $totalProduction = [];

	public function addAnimal($animal) {
		$this->animals[] = $animal;
	}

	public function getCountAnimals() {
		$result = [];
		foreach ($this->animals as $animal) {
			$name = $animal->name;
			if (array_key_exists($name, $result)) {
				$result[$name] += 1;
			} else {
				$result[$name] = 1;
			}
		}
		return $result;
	}

	public function collectProduction() {
		foreach ($this->animals as $animal) {
			$type = $animal->typeProduction;
			$count = $animal->getProduction();
			if (array_key_exists($type, $this->totalProduction)) {
				$this->totalProduction[$type] += $count;
			} else {
				$this->totalProduction[$type] = $count;
			}
		}
	}

	public function getCountProduction() {
		return $this->totalProduction;
	}
}

?>