<?php
namespace Patterns\Observer\Alura;

class Item{

	private $title;
	private $value;

	function __construct($title, $value) {
		$this->title = $title;
		$this->value = $value;
	}

	public function getTitle(){
		return $this->title;
	}

	public function getValue(){
		return $this->value;
	}
}