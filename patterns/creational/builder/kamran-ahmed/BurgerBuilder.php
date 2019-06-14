<?php
namespace Patterns\Creational\Builder\KamranAhmed;

class BurgerBuilder {
	public $size;
	public $cheese = false;
	public $pepperoni = false;
	public $lettuce = false;
	public $tomato = false;

	public function __construct(int $size) {
		$this->size = $size;
	}

	public function addPepperoni(): self {
		$this->pepperoni = true;
		return $this;
	}

	public function addLettuce(): self {
		$this->lettuce = true;
		return $this;
	}

	public function addCheese(): self {
		$this->cheese = true;
		return $this;
	}

	public function addTomato(): self {
		$this->tomato = true;
		return $this;
	}

	public function build(): Burger {
		return new Burger($this);
	}
}
