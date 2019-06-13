<?php
namespace Tests\Domnikl;

use Patterns\Creational\SimpleFactory\Domnikl\Bicycle;
use Patterns\Creational\SimpleFactory\Domnikl\SimpleFactory;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase {
    public function testCanCreateBicycle() {
        $bicycle = (new SimpleFactory())->createBicycle();
        $this->assertInstanceOf(Bicycle::class, $bicycle);
    }
}
