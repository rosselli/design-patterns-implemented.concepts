<?php
namespace Patterns\Behavioral\Visitor\KamranAhmed;

class Dolphin implements Animal {
	public function speak() {
		return 'Tuut tutt tuutt!';
	}

	public function accept(AnimalOperation $operation) {
		return $operation->visitDolphin($this);
	}
}
