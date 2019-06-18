<?php
namespace Patterns\Structural\Decorator\KamranAhmed;

class SimpleCoffee implements Coffee {
	public function getCost(): int {
		return 10;
	}

	public function getDescription(): string {
		return 'Simple coffee';
	}
}