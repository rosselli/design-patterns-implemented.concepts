<?php
namespace Tests\Domnikl;

use Patterns\Behavioral\Command\Domnikl\HelloCommand;
use Patterns\Behavioral\Command\Domnikl\Invoker;
use Patterns\Behavioral\Command\Domnikl\Receiver;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase {
    public function testCommand() {
        $invoker = new Invoker();
        $receiver = new Receiver();

        $invoker->setCommand(new HelloCommand($receiver));
        $invoker->run();
        $this->assertSame('Hello World', $receiver->getOutput());
    }
}
