<?php
namespace Patterns\Structural\Flyweight\Domnikl;

interface FlyweightInterface {
    public function render(string $extrinsicState): string;
}
