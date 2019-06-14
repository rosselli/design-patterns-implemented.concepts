<?php
namespace Tests\KamranAhmed;

use Patterns\Creational\Builder\KamranAhmed\BurgerBuilder;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase {

	public function testBuilder() {
		$burger = (new BurgerBuilder(14))
			->addPepperoni()
			->addLettuce()
			->addTomato()
			->build();

		$this->assertInstanceOf("Patterns\Creational\Builder\KamranAhmed\Burger", $burger);
	}
}
