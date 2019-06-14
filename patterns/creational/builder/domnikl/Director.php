<?php
namespace Patterns\Creational\Builder\Domnikl;

class Director {
    public function build(BuilderInterface $builder): Vehicle {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();
        return $builder->getVehicle();
    }
}
