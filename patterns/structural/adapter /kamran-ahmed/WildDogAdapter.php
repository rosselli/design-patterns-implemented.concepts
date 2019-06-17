<?php
namespace Patterns\Structural\Adapter\KamranAhmed;

class WildDogAdapter implements Lion {
	protected $dog;

	public function __construct(WildDog $dog) {
		$this->dog = $dog;
	}

	public function roar(): string {
		return $this->dog->bark();
	}
}
