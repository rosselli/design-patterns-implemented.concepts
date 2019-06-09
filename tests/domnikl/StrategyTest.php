<?php
namespace Tests\Domnikl;

use Patterns\Behavioral\Strategy\Domnikl\Context;
use Patterns\Behavioral\Strategy\Domnikl\DateComparator;
use Patterns\Behavioral\Strategy\Domnikl\IdComparator;
use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase {
    public function provideIntegers(){
        return [
            [[['id' => 2], ['id' => 1], ['id' => 3]], ['id' => 1],],
            [[['id' => 3], ['id' => 2], ['id' => 1]], ['id' => 1],],
        ];
    }

    public function provideDates() {
        return [
            [[['date' => '2014-03-03'], ['date' => '2015-03-02'], ['date' => '2013-03-01']], ['date' => '2013-03-01'],],
            [[['date' => '2014-02-03'], ['date' => '2013-02-01'], ['date' => '2015-02-02']], ['date' => '2013-02-01'],],
        ];
    }

    /** @dataProvider provideIntegers */
    public function testIdComparator($collection, $expected) {
        $obj = new Context(new IdComparator());
        $elements = $obj->executeStrategy($collection);
        $firstElement = array_shift($elements);
        $this->assertSame($expected, $firstElement);
    }

    /** @dataProvider provideDates */
    public function testDateComparator($collection, $expected) {
        $obj = new Context(new DateComparator());
        $elements = $obj->executeStrategy($collection);
        $firstElement = array_shift($elements);
        $this->assertSame($expected, $firstElement);
    }
}
