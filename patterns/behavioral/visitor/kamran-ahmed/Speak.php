<?php
namespace Patterns\Behavioral\Visitor\KamranAhmed;

class Speak implements AnimalOperation {
	public function visitMonkey(Monkey $monkey) {
		return $monkey->shout();
	}

	public function visitLion(Lion $lion) {
		return $lion->roar();
	}

	public function visitDolphin(Dolphin $dolphin) {
		return $dolphin->speak();
	}
}
