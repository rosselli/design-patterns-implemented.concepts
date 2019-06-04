<?php
namespace Patterns\Behavioral\Visitor\KamranAhmed;

class Lion implements Animal {
	public function roar(): string {
		return 'Roaaar!';
	}

	public function accept(AnimalOperation $operation) {
		return $operation->visitLion($this);
	}
}
