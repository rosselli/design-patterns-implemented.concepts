<?php
namespace Tests\KamranAhmed;

use Patterns\Behavioral\State\KamranAhmed\DefaultText;
use Patterns\Behavioral\State\KamranAhmed\LowerCase;
use Patterns\Behavioral\State\KamranAhmed\TextEditor;
use Patterns\Behavioral\State\KamranAhmed\UpperCase;
use PHPUnit\Framework\TestCase;

class StateTest extends TestCase {
	public function testState() {
		$editor = new TextEditor(new DefaultText());
		$this->assertSame('First line', $editor->type('First line'));

		$editor->setState(new UpperCase());
		$this->assertSame('SECOND LINE', $editor->type('Second line'));
		$this->assertSame('THIRD LINE', $editor->type('Third line'));

		$editor->setState(new LowerCase());
		$this->assertSame('fourth line', $editor->type('Fourth line'));
		$this->assertSame('fifth line', $editor->type('Fifth line'));
	}

}
