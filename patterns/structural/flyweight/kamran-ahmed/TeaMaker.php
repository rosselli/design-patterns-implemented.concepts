<?php
namespace Patterns\Structural\Flyweight\KamranAhmed;

class TeaMaker {
	protected $availableTea = [];

	public function make($preference): GreenTea {
		if (empty($this->availableTea[$preference])) {
			$this->availableTea[$preference] = new GreenTea();
		}
		return $this->availableTea[$preference];
	}
}