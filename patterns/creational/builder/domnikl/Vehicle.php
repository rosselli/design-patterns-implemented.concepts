<?php
namespace Patterns\Creational\Builder\Domnikl;

class Vehicle {
    private $data = [];

    public function setPart($key, $value) {
        $this->data[$key] = $value;
    }
}
