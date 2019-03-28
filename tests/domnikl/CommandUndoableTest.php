<?php
namespace Tests\Domnikl;

use Patterns\Behavioral\Command\Domnikl\AddMessageDateCommand;
use Patterns\Behavioral\Command\Domnikl\HelloCommand;
use Patterns\Behavioral\Command\Domnikl\Invoker;
use Patterns\Behavioral\Command\Domnikl\Receiver;
use PHPUnit\Framework\TestCase;

class UndoableCommandTest extends TestCase {
    public function testInvocation() {
        $invoker = new Invoker();
        $receiver = new Receiver();

        $invoker->setCommand(new HelloCommand($receiver));
        $invoker->run();
        $this->assertSame('Hello World', $receiver->getOutput());

        $messageDateCommand = new AddMessageDateCommand($receiver);
        $messageDateCommand->execute();
        $invoker->run();
        $this->assertSame("Hello World\nHello World [".date('Y-m-d').']', $receiver->getOutput());
        $messageDateCommand->undo();
        $invoker->run();
        $this->assertSame("Hello World\nHello World [".date('Y-m-d')."]\nHello World", $receiver->getOutput());
    }
}
