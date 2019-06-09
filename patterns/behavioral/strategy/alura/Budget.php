<?php
namespace Patterns\Strategy\Alura;

class Budget{

	private $value;

	function __construct($value) {
		$this->value = $value;
	}

	public function getValue(){
		return $this->value;
	}
}