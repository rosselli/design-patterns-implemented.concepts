<?php
namespace DesignPatterns\Structural\Facade\Tests;


use Patterns\Structural\Facade\Domnikl\ComputerFacade;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase {

    public function testComputerOn() {
        /** @var OsInterface|\PHPUnit_Framework_MockObject_MockObject $os */
        $os = $this->createMock('Patterns\Structural\Facade\Domnikl\OsInterface');

        $os->method('getName')->will($this->returnValue('Linux'));

        $bios = $this->getMockBuilder('Patterns\Structural\Facade\Domnikl\BiosInterface')
            ->setMethods(['launch', 'execute', 'waitForKeyPress'])
            ->disableAutoload()
            ->getMock();

        $bios->expects($this->once())
            ->method('launch')
            ->with($os);

        $facade = new ComputerFacade($bios, $os);

        // the facade interface is simple
        $facade->turnOn();

        // but you can also access the underlying components
        $this->assertSame('Linux', $os->getName());
    }
}
