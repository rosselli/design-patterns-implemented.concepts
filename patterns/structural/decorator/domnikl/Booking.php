<?php
namespace Patterns\Structural\Decorator\Domnikl;

interface Booking {
    public function calculatePrice(): int;
    public function getDescription(): string;
}
