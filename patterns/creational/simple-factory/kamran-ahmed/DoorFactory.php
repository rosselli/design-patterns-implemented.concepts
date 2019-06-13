<?php
namespace Patterns\Creational\AbstractFactory\KamranAhmed;

class DoorFactory {
	public static function makeDoor($width, $height): DoorInterface {
		return new WoodenDoor($width, $height);
	}
}
