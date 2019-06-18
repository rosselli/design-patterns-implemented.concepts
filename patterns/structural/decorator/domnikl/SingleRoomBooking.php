<?php
namespace Patterns\Structural\Decorator\Domnikl;

class SingleRoomBooking implements Booking {
    public function calculatePrice(): int {
        return 30;
    }

    public function getDescription(): string {
        return 'single room';
    }
}
