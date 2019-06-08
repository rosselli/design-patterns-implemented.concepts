<?php
namespace Patterns\Behavioral\State\Domnikl;

class StateDone implements State {
    public function proceedToNext(OrderContext $context): void {
        # nothing
    }

    public function toString(): string {
        return 'done';
    }
}
