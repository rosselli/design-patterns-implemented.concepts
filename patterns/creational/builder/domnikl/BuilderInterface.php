<?php
namespace Patterns\Creational\Builder\Domnikl;

interface BuilderInterface {
    public function createVehicle(): void;
    public function addWheel(): void;
    public function addEngine(): void;
    public function addDoors(): void;
    public function getVehicle(): Vehicle;
}
