<?php
namespace Tests\KamranAhmed;

use Patterns\Creational\AbstractFactory\KamranAhmed\IronDoorFactory;
use Patterns\Creational\AbstractFactory\KamranAhmed\WoodenDoorFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase {

	public function testAbstractFactory() {
		$woodenFactory = new WoodenDoorFactory();

		$door = $woodenFactory->makeDoor(100, 200);
		$expert = $woodenFactory->makeFittingExpert();

		$this->assertSame('I am a wooden door', $door->getDescription());
		$this->assertSame('I can only fit wooden doors', $expert->getDescription());


		$ironFactory = new IronDoorFactory();

		$door = $ironFactory->makeDoor(100, 200);
		$expert = $ironFactory->makeFittingExpert();

		$this->assertSame('I am a iron door', $door->getDescription());
		$this->assertSame('I can only fit iron doors', $expert->getDescription());
	}
}
