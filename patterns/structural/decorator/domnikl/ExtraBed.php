<?php
namespace Patterns\Structural\Decorator\Domnikl;

class ExtraBed extends BookingDecorator {
    private const PRICE = 30;

    public function calculatePrice(): int {
        return $this->booking->calculatePrice() + self::PRICE;
    }

    public function getDescription(): string {
        return $this->booking->getDescription() . ' with extra bed';
    }
}
