<?php
namespace Tests\KamranAhmed;

use Patterns\Behavioral\Command\KamranAhmed\Bulb;
use Patterns\Behavioral\Command\KamranAhmed\RemoteControl;
use Patterns\Behavioral\Command\KamranAhmed\TurnOff;
use Patterns\Behavioral\Command\KamranAhmed\TurnOn;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase {

	public function testBulbCommands() {
		$bulb = new Bulb();
		$turnOn = new TurnOn($bulb);
		$turnOff = new TurnOff($bulb);

		$remote = new RemoteControl();
		$this->expectOutputString('Bulb has been lit.', $remote->submit($turnOn));
		$this->expectOutputString('Bulb has been lit.Darkness.', $remote->submit($turnOff));
		$this->assertTrue(true);
	}
}
