<?php
namespace Patterns\Structural\Decorator\KamranAhmed;

class MilkCoffee implements Coffee {
	protected $coffee;

	public function __construct(Coffee $coffee) {
		$this->coffee = $coffee;
	}

	public function getCost(): int {
		return $this->coffee->getCost() + 2;
	}

	public function getDescription(): string {
		return $this->coffee->getDescription() . ', milk';
	}
}