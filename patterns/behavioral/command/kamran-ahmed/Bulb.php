<?php
namespace Patterns\Behavioral\Command\KamranAhmed;

class Bulb {
	public function turnOn(): void {
		echo "Bulb has been lit.";
	}

	public function turnOff(): void {
		echo "Darkness.";
	}
}