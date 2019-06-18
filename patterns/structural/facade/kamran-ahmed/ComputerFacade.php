<?php
namespace Patterns\Structural\Facade\KamranAhmed;

class ComputerFacade {
	protected $computer;

	public function __construct(Computer $computer){
		$this->computer = $computer;
	}

	public function turnOn(): string {
		$return = $this->computer->getElectricShock();
		$return .= $this->computer->makeSound();
		$return .= $this->computer->showLoadingScreen();
		$return .= $this->computer->bam();
		return $return;
	}

	public function turnOff(): string {
		$return = $this->computer->closeEverything();
		$return .= $this->computer->pullCurrent();
		$return .= $this->computer->sooth();
		return $return;
	}
}