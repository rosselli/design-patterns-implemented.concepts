<?php
namespace Tests\KamranAhmed;

use Patterns\Structural\Proxy\KamranAhmed\LabDoor;
use Patterns\Structural\Proxy\KamranAhmed\SecuredDoor;
use PHPUnit\Framework\TestCase;

class ProxyTest extends TestCase {

	public function testSecurity() {
		$door = new SecuredDoor(new LabDoor());
		$this->assertSame('Big no! It ain\'t possible.', $door->open('invalid'));

		$labDoor = new LabDoor();
		$this->assertSame('Opening the lab door', $labDoor->open('$ecr@t'));
		$this->assertSame('Closing the lab door', $labDoor->close());
	}
}
