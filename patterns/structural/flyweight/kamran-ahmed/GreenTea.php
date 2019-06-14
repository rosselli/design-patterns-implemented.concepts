<?php
namespace Patterns\Structural\Flyweight\KamranAhmed;

class GreenTea {
	private $type;

	public function __construct(string $type) {
		$this->type = $type;
	}

	public function getType(): string {
		return $this->type;
	}
}