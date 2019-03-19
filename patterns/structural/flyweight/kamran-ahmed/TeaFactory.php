<?php
namespace Patterns\Structural\Flyweight\KamranAhmed;

class TeaFactory {
	protected $availableTea = [];

	public function make($preference): GreenTea {
		if (empty($this->availableTea[$preference])) {
			$this->availableTea[$preference] = new GreenTea($preference);
		}
		return $this->availableTea[$preference];
	}

	public function getAvailableTea(): array {
		return $this->availableTea;
	}
}