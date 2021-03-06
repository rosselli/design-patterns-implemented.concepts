<?php
namespace Patterns\Behavioral\Visitor\KamranAhmed;

class Monkey implements Animal {
	public function shout(): string {
		return 'Ooh oo aa aa!';
	}

	public function accept(AnimalOperation $operation) {
		return $operation->visitMonkey($this);
	}
}