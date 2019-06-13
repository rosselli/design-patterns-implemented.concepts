<?php
namespace Patterns\Creational\SimpleFactory\KamranAhmed;

class WoodenDoor implements Door {
	private $width;
	private $height;

	public function __construct(float $width, float $height) {
		$this->width = $width;
		$this->height = $height;
	}

	public function getWidth(): float {
		return $this->width;
	}

	public function getHeight(): float {
		return $this->height;
	}
}
