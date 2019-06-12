<?php
namespace Patterns\Behavioral\Command\KamranAhmed;

class TurnOn implements Command {
	private $bulb;

	public function __construct(Bulb $bulb) {
		$this->bulb = $bulb;
	}

	public function execute(): void  {
		$this->bulb->turnOn();
	}

	public function undo(): void  {
		$this->bulb->turnOff();
	}

	public function redo(): void  {
		$this->execute();
	}
}