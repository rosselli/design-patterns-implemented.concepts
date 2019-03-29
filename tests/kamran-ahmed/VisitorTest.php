<?php
namespace Tests\KamranAhmed;

use Patterns\Behavioral\Visitor\KamranAhmed\Dolphin;
use Patterns\Behavioral\Visitor\KamranAhmed\Jump;
use Patterns\Behavioral\Visitor\KamranAhmed\Lion;
use Patterns\Behavioral\Visitor\KamranAhmed\Monkey;
use Patterns\Behavioral\Visitor\KamranAhmed\Speak;
use PHPUnit\Framework\TestCase;

class VisitorTest extends TestCase {

	public function SetUp() {
		$this->dolphin = new Dolphin();
		$this->lion = new Lion();
		$this->monkey = new Monkey();
	}

	public function testJustSpeak() {
		$speak = new Speak();

		$this->assertSame('Tuut tutt tuutt!', $this->dolphin->accept($speak));
		$this->assertSame('Roaaar!', $this->lion->accept($speak));
		$this->assertSame('Ooh oo aa aa!', $this->monkey->accept($speak));
	}

	public function testSpeakAndJump() {
		$speak = new Speak();
		$jump = new Jump();

		$this->assertSame('Walked on water a little and disappeared', $this->dolphin->accept($jump));
		$this->assertSame('Tuut tutt tuutt!', $this->dolphin->accept($speak));
		$this->assertSame('Jumped 7 feet! Back on the ground!', $this->lion->accept($jump));
		$this->assertSame('Roaaar!', $this->lion->accept($speak));
		$this->assertSame('Jumped 20 feet high! on to the tree!', $this->monkey->accept($jump));
		$this->assertSame('Ooh oo aa aa!', $this->monkey->accept($speak));
	}
}
