<?php
namespace Patterns\Structural\Composite\KamranAhmed;

class Organization {
	private $employees;

	public function addEmployee(Employee $employee): void {
		$this->employees[] = $employee;
	}

	public function getNetSalaries(): float {
		$netSalary = 0;

		foreach ($this->employees as $employee) {
			$netSalary += $employee->getSalary();
		}

		return $netSalary;
	}
}