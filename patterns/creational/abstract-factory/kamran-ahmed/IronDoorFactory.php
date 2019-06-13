<?php
namespace Patterns\Creational\AbstractFactory\KamranAhmed;

class IronDoorFactory {
	public function makeDoor($width, $height): IronDoor {
		return new IronDoor($width, $height);
	}

	public function makeFittingExpert(): DoorFittingExpertInterface {
		return new Welder();
	}
}
