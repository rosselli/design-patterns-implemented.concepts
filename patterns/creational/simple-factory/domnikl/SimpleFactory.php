<?php
namespace Patterns\Creational\SimpleFactory\Domnikl;

class SimpleFactory {
    public function createBicycle(): Bicycle {
        return new Bicycle();
    }
}
