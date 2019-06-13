<?php
namespace Patterns\Creational\Prototype\KamranAhmed;

class Sheep {
	protected $name;
	protected $category;

	public function __construct(string $name, string $category = 'Mountain Sheep') {
		$this->name = $name;
		$this->category = $category;
	}

	public function setName(string $name): void {
		$this->name = $name;
	}

	public function getName(): string {
		return $this->name;
	}

	public function setCategory(string $category): void {
		$this->category = $category;
	}

	public function getCategory(): string {
		return $this->category;
	}
}

