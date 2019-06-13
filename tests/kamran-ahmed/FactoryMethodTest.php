<?php
namespace Tests\KamranAhmed;

use Patterns\Creational\FactoryMethod\KamranAhmed\DevelopmentManager;
use Patterns\Creational\FactoryMethod\KamranAhmed\MarketingManager;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase {
	public function testFactoryMethod() {
		$devManager = new DevelopmentManager();
 		$this->assertSame('Asking about design patterns', $devManager->takeInterview());

		$marketingManager = new MarketingManager();
 		$this->assertSame('Asking about community building', $marketingManager->takeInterview());
	}
}
