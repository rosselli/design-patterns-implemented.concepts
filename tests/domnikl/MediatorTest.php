<?php

namespace DesignPatterns\Tests\Mediator\Tests;

use Patterns\Behavioral\Mediator\Domnikl\Mediator;
use Patterns\Behavioral\Mediator\Domnikl\Subsystem\Client;
use Patterns\Behavioral\Mediator\Domnikl\Subsystem\Database;
use Patterns\Behavioral\Mediator\Domnikl\Subsystem\Server;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase {
    public function testOutputHelloWorld(){
        $client = new Client();
        new Mediator(new Database(), $client, new Server());

		$this->assertSame('Hello World', $client->request());
    }
}
