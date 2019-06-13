<?php
namespace Patterns\Creational\SimpleFactory\KamranAhmed;

class DoorFactory {
	public static function makeDoor($width, $height): Door {
		return new WoodenDoor($width, $height);
	}
}
