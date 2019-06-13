<?php
namespace Patterns\Creational\AbstractFactory\KamranAhmed;

interface DoorFactoryInterface {
	public function makeDoor($width, $height): DoorsAbstract;
	public function makeFittingExpert(): DoorFittingExpertInterface;
}
