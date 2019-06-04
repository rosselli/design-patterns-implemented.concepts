<?php
namespace Patterns\Behavioral\Visitor\KamranAhmed;

class Dolphin implements Animal {
	public function speak(): string {
		return 'Tuut tutt tuutt!';
	}

	public function accept(AnimalOperation $operation) {
		return $operation->visitDolphin($this);
	}
}
