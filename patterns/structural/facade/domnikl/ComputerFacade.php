<?php
namespace Patterns\Structural\Facade\Domnikl;

class ComputerFacade {
    private $os;
    private $bios;

    public function __construct(BiosInterface $bios, OsInterface $os) {
        $this->bios = $bios;
        $this->os = $os;
    }

    public function turnOn(): void {
        $this->bios->execute();
        $this->bios->waitForKeyPress();
        $this->bios->launch($this->os);
    }

    public function turnOff(): void {
        $this->os->halt();
        $this->bios->powerDown();
    }
}
