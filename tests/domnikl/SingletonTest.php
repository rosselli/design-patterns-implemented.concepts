<?php
namespace Tests\Domnikl;

use Patterns\Creational\Singleton\Domnikl\Singleton;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase {
    public function testUniqueness(){
        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }
}
