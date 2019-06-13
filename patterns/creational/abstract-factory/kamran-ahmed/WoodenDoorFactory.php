<?php
namespace Patterns\Creational\AbstractFactory\KamranAhmed;

class WoodenDoorFactory implements DoorFactoryInterface {
	public function makeDoor($width, $height): DoorsAbstract {
		return new WoodenDoor($width, $height);
	}

	public function makeFittingExpert(): DoorFittingExpertInterface {
		return new Carpenter();
	}
}
