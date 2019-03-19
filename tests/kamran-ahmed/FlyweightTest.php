<?php
namespace Tests\KamranAhmed;

use Patterns\Structural\Flyweight\KamranAhmed\TeaFactory;
use Patterns\Structural\Flyweight\KamranAhmed\TeaShop;
use PHPUnit\Framework\TestCase;

class FlyweightTest extends TestCase {
	public function testTeaShop() {
		$teaMaker = new TeaFactory();
		$shop = new TeaShop($teaMaker);

		$shop->takeOrder('less sugar', 1);
		$shop->takeOrder('more milk', 2);
		$shop->takeOrder('without sugar', 5);
		$serve = $shop->serve();

		$this->assertSame('array', gettype($serve));
		$this->assertSame('Serving less sugar to table #1', $serve[0]);
		$this->assertCount(3, $serve);
		$this->assertSame('Serving more milk to table #2', $serve[1]);
		$this->assertSame('Serving without sugar to table #5', $serve[2]);
	}
}

