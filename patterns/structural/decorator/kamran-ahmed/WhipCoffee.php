<?php
namespace Patterns\Structural\Decorator\KamranAhmed;

class WhipCoffee implements Coffee {
	protected $coffee;

	public function __construct(Coffee $coffee) {
		$this->coffee = $coffee;
	}

	public function getCost(): int {
		return $this->coffee->getCost() + 5;
	}

	public function getDescription(): string {
		return $this->coffee->getDescription().', whip';
	}
}
