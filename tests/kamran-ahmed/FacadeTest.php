<?php
namespace Tests\KamranAhmed;

use Patterns\Structural\Facade\KamranAhmed\Computer;
use Patterns\Structural\Facade\KamranAhmed\ComputerFacade;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase {

	protected function setUp(): void {
		$this->computer = new Computer();
		$this->computerFacade = new ComputerFacade($this->computer);
	}

	public function testTurnOn() {
		$this->assertSame('Ouch!Beep beep!Loading..Ready to be used!', $this->computerFacade->turnOn());
	}

	public function testTurnOff() {
		$this->assertSame('Bup bup bup buzzzz!Haaah!Zzzzz', $this->computerFacade->turnOff());
	}

	public function testComputerMethods() {
		$this->assertSame('Ouch!', $this->computer->getElectricShock());
		$this->assertSame('Beep beep!', $this->computer->makeSound());
		$this->assertSame('Loading..', $this->computer->showLoadingScreen());
		$this->assertSame('Ready to be used!', $this->computer->bam());
		$this->assertSame('Bup bup bup buzzzz!', $this->computer->closeEverything());
		$this->assertSame('Zzzzz', $this->computer->sooth());
		$this->assertSame('Haaah!', $this->computer->pullCurrent());
	}
}
