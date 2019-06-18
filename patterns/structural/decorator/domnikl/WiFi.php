<?php
namespace Patterns\Structural\Decorator\Domnikl;

class WiFi extends BookingDecorator {
    private const PRICE = 2;

    public function calculatePrice(): int {
        return $this->booking->calculatePrice() + self::PRICE;
    }

    public function getDescription(): string {
        return $this->booking->getDescription() . ' with wifi';
    }
}
