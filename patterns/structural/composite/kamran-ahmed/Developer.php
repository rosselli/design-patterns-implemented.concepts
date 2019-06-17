<?php
namespace Patterns\Structural\Composite\KamranAhmed;

class Developer implements Employee {
	private $name;
	private $salary;
	private $roles;

	public function __construct(string $name, float $salary) {
		$this->name = $name;
		$this->salary = $salary;
	}

	public function getName(): string {
		return $this->name;
	}

	public function setSalary(float $salary): void {
		$this->salary = $salary;
	}

	public function getSalary(): float {
		return $this->salary;
	}

	public function getRoles(): array {
		return $this->roles;
	}
}
