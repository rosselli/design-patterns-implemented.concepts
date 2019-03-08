<?php
namespace Tests\KamranAhmed;

use Patterns\Creational\Singleton\KamranAhmed\President;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase {
	public function testPresident() {
		$president1 = President::getInstance();
		$president2 = President::getInstance();

		$this->assertEquals($president1, $president2);
	}
}
