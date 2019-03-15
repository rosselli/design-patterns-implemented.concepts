<?php
namespace Patterns\Behavioral\Specification\Domnikl;

class Item {
    private $price;

    public function __construct(float $price) {
        $this->price = $price;
    }

    public function getPrice(): float {
        return $this->price;
    }
}
