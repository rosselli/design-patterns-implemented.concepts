<?php
namespace Patterns\Behavioral\Command\KamranAhmed;

class TurnOff implements Command {
	private $bulb;

	public function __construct(Bulb $bulb) {
		$this->bulb = $bulb;
	}

	public function execute(): void {
		$this->bulb->turnOff();
	}

	public function undo(): void  {
		$this->bulb->turnOn();
	}

	public function redo(): void  {
		$this->execute();
	}
}