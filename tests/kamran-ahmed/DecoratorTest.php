<?php
namespace Tests\KamranAhmed;

use Patterns\Structural\Decorator\KamranAhmed\MilkCoffee;
use Patterns\Structural\Decorator\KamranAhmed\SimpleCoffee;
use Patterns\Structural\Decorator\KamranAhmed\VanillaCoffee;
use Patterns\Structural\Decorator\KamranAhmed\WhipCoffee;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase {

	public function testSimpleCoffee() {
		$someCoffee = new SimpleCoffee();
		$this->assertEquals(10, $someCoffee->getCost());
		$this->assertSame('Simple coffee', $someCoffee->getDescription());
	}

	public function testMilkCoffee() {
		$someCoffee = new SimpleCoffee();
		$someCoffee = new MilkCoffee($someCoffee);
		$this->assertEquals(12, $someCoffee->getCost());
		$this->assertSame('Simple coffee, milk', $someCoffee->getDescription());
	}

	public function testWhipCoffee() {
		$someCoffee = new SimpleCoffee();
		$someCoffee = new MilkCoffee($someCoffee);
		$someCoffee = new WhipCoffee($someCoffee);
		$this->assertEquals(17, $someCoffee->getCost());
		$this->assertSame('Simple coffee, milk, whip', $someCoffee->getDescription());
	}

	public function testVanillaCoffee() {
		$someCoffee = new SimpleCoffee();
		$someCoffee = new MilkCoffee($someCoffee);
		$someCoffee = new WhipCoffee($someCoffee);
		$someCoffee = new VanillaCoffee($someCoffee);
		$this->assertEquals(20, $someCoffee->getCost());
		$this->assertSame('Simple coffee, milk, whip, vanilla', $someCoffee->getDescription());
	}
}
