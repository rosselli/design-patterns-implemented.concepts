<?php
namespace Tests\Domnikl;

use Patterns\Creational\StaticFactory\Domnikl\StaticFactory;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase {
    public function testCanCreateNumberFormatter() {
        $this->assertInstanceOf(
            'Patterns\Creational\StaticFactory\Domnikl\FormatNumber',
            StaticFactory::factory('number')
        );
    }

    public function testCanCreateStringFormatter() {
        $this->assertInstanceOf(
            'Patterns\Creational\StaticFactory\Domnikl\FormatString',
            StaticFactory::factory('string')
        );
    }

    public function testException() {
		$this->expectException('\InvalidArgumentException');
        StaticFactory::factory('object');
    }
}
