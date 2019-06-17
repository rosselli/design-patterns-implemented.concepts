<?php
namespace Tests\KamranAhmed;

use Patterns\Structural\Adapter\KamranAhmed\AfricanLion;
use Patterns\Structural\Adapter\KamranAhmed\AsianLion;
use Patterns\Structural\Adapter\KamranAhmed\Hunter;
use Patterns\Structural\Adapter\KamranAhmed\WildDog;
use Patterns\Structural\Adapter\KamranAhmed\WildDogAdapter;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase {

	public function testAdapter() {
		$africanLion = new AfricanLion;
		$this->assertSame('African roaring.', $africanLion->roar());

		$asianLion = new AsianLion;
		$this->assertSame('Asian roaring.', $asianLion->roar());


		$wildDog = new WildDog();
		$wildDogAdapter = new WildDogAdapter($wildDog);
		$this->assertSame('Wild barking.', $wildDogAdapter->roar());

		$hunter = new Hunter();
		$hunter->hunt($wildDogAdapter);
		$this->assertSame('Wild barking.', $hunter->hunt($wildDogAdapter));
	}
}
