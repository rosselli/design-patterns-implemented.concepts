<?php
namespace Patterns\Behavioral\State\Domnikl;

class StateShipped implements State {
    public function proceedToNext(OrderContext $context): void {
        $context->setState(new StateDone());
    }

    public function toString(): string {
        return 'shipped';
    }
}
