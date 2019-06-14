<?php
namespace Tests\Domnikl;

use Patterns\Creational\Builder\Domnikl\Car;
use Patterns\Creational\Builder\Domnikl\CarBuilder;
use Patterns\Creational\Builder\Domnikl\Director;
use Patterns\Creational\Builder\Domnikl\Truck;
use Patterns\Creational\Builder\Domnikl\TruckBuilder;
use PHPUnit\Framework\TestCase;

class DirectorTest extends TestCase {

    public function testCanBuildTruck(){
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new Director())->build($truckBuilder);
        $this->assertInstanceOf(Truck::class, $newVehicle);
    }

    public function testCanBuildCar() {
        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);
        $this->assertInstanceOf(Car::class, $newVehicle);
    }
}
