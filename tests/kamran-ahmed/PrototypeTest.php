<?php
namespace Tests\KamranAhmed;

use Patterns\Creational\Prototype\KamranAhmed\Sheep;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase {

	public function testPrototype() {
		$original = new Sheep('Jolly');
		$this->assertSame('Jolly', $original->getName());
		$this->assertSame('Mountain Sheep', $original->getCategory());

		# clone and modify what is required
		$cloned = clone $original;
		$cloned->setName('Dolly');
		$this->assertSame('Dolly', $cloned->getName());
		$this->assertSame('Mountain Sheep', $cloned->getCategory());
	}
}
