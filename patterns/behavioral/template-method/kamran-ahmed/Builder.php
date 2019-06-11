<?php
namespace Patterns\Behavioral\TemplateMethod\KamranAhmed;

abstract class Builder {
	private $thingsToDo = [];

	# Template method
	final public function build() {
		$this->thingsToDo[] = $this->test();
		$this->thingsToDo[] = $this->lint();
		$this->thingsToDo[] = $this->assemble();
		$this->thingsToDo[] = $this->deploy();
		return $this->thingsToDo;
	}

	abstract public function test();
	abstract public function lint();
	abstract public function assemble();
	abstract public function deploy();
}