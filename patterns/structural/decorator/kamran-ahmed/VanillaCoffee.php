<?php
namespace Patterns\Structural\Decorator\KamranAhmed;

class VanillaCoffee implements Coffee {
	private $coffee;

	public function __construct(Coffee $coffee) {
		$this->coffee = $coffee;
	}

	public function getCost(): int {
		return $this->coffee->getCost() + 3;
	}

	public function getDescription(): string {
		return $this->coffee->getDescription() . ', vanilla';
	}
}