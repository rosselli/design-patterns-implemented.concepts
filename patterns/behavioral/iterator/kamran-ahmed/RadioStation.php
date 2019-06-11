<?php
namespace Patterns\Behavioral\Iterator\KamranAhmed;

class RadioStation {
	private $frequency;

	public function __construct(float $frequency) {
		$this->frequency = $frequency;
	}

	public function getFrequency(): float {
		return $this->frequency;
	}
}
