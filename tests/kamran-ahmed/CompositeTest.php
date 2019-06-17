<?php
namespace Tests\KamranAhmed;

use Patterns\Structural\Composite\KamranAhmed\Designer;
use Patterns\Structural\Composite\KamranAhmed\Developer;
use Patterns\Structural\Composite\KamranAhmed\Organization;
use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase {

	public function testNetSalary() {
		$john = new Developer('John Doe', 12000);
		$jane = new Designer('Jane Doe', 15000);

		$organization = new Organization();
		$organization->addEmployee($john);
		$organization->addEmployee($jane);

		$this->assertEquals(27000, $organization->getNetSalaries());
	}
}
