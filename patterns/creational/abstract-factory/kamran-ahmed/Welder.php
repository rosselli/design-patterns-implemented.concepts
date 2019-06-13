<?php
namespace Patterns\Creational\AbstractFactory\KamranAhmed;

class Welder implements DoorFittingExpertInterface {
	public function getDescription(): string {
		return 'I can only fit iron doors';
	}
}
