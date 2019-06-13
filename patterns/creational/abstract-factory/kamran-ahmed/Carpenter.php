<?php
namespace Patterns\Creational\AbstractFactory\KamranAhmed;

class Carpenter implements DoorFittingExpertInterface {
	public function getDescription(): string {
		return 'I can only fit wooden doors';
	}
}
