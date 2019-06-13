<?php
namespace Tests\KamranAhmed;

use Patterns\Creational\SimpleFactory\KamranAhmed\DoorFactory;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase {

	public function testSimpleFactory() {
		$door = DoorFactory::makeDoor(100, 200);
		$this->assertEquals(100, $door->getWidth());
		$this->assertEquals(200, $door->getHeight());

		$door2 = DoorFactory::makeDoor(50, 100);
		$this->assertEquals(50, $door2->getWidth());
		$this->assertEquals(100, $door2->getHeight());
	}

}
