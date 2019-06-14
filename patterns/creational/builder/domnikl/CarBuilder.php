<?php
namespace Patterns\Creational\Builder\Domnikl;

class CarBuilder implements BuilderInterface {
    private $car;

    public function addDoors(): void {
        $this->car->setPart('rightDoor', new Door());
        $this->car->setPart('leftDoor', new Door());
        $this->car->setPart('trunkLid', new Door());
    }

    public function addEngine(): void {
        $this->car->setPart('engine', new Engine());
    }

    public function addWheel(): void {
        $this->car->setPart('wheelLF', new Wheel());
        $this->car->setPart('wheelRF', new Wheel());
        $this->car->setPart('wheelLR', new Wheel());
        $this->car->setPart('wheelRR', new Wheel());
    }

    public function createVehicle(): void {
        $this->car = new Car();
    }

    public function getVehicle(): Vehicle {
        return $this->car;
    }
}
