<?php
namespace Tests\Domnikl;

use Patterns\Structural\Composite\Domnikl\InputElement;
use Patterns\Structural\Composite\Domnikl\TextElement;
use Patterns\Structural\Composite\Domnikl\FormClose;
use Patterns\Structural\Composite\Domnikl\FormOpen;
use Patterns\Structural\Composite\Domnikl\Render;
use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase {
	public function testRender() {
		$form = new Render();
		$form->addElement(new FormOpen());
		$form->addElement(new TextElement('Email:'));
		$form->addElement(new InputElement());
		$form->addElement(new FormClose());
		$this->assertSame('<form>Email:<input type="text" /></form>', $form->make());
	}
}
