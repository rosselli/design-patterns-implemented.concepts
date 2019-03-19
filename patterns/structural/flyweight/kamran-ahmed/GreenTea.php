<?php
namespace Patterns\Structural\Flyweight\KamranAhmed;

class GreenTea {
	private $type;

	public function __construct($type) {
		$this->type = $type;
	}

	public function getType() {
		return $this->type;
	}
}