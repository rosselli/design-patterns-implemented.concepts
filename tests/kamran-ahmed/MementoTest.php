<?php
namespace Tests\KamranAhmed;

use Patterns\Behavioral\Memento\KamranAhmed\Editor;
use PHPUnit\Framework\TestCase;

class MementoTest extends TestCase {
	public function testMemento() {
		$editor = new Editor();
		$editor->type('This is the first sentence.');
		$editor->type('This is second.');
		$this->assertSame('This is the first sentence.This is second.', $editor->getContent());
		$saved = $editor->save();
		$editor->type('And this is third.');
		$this->assertSame('This is the first sentence.This is second.And this is third.', $editor->getContent());
		$editor->restore($saved);
		$this->assertSame('This is the first sentence.This is second.', $editor->getContent());
	}
}
