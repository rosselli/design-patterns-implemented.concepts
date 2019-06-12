<?php
namespace Tests\KamranAhmed;

use Patterns\Behavioral\Mediator\KamranAhmed\ChatRoom;
use Patterns\Behavioral\Mediator\KamranAhmed\User;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase {

	public function testMediator() {
		$time = date('M d, y H:i');
		$mediator = new ChatRoom();

		$john = new User('John', $mediator);
		$jane = new User('Jane', $mediator);

		$this->assertSame($time.'[John]:Hi there!', $john->send('Hi there!'));
		$this->assertSame($time.'[Jane]:Hey!', $jane->send('Hey!'));
	}

}
