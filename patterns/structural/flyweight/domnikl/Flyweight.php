<?php
namespace Patterns\Structural\Flyweight\Domnikl;

interface Flyweight {
    public function render(string $extrinsicState): string;
}
