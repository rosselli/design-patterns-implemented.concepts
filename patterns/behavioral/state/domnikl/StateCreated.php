<?php
namespace Patterns\Behavioral\State\Domnikl;

class StateCreated implements State {
    public function proceedToNext(OrderContext $context): void {
        $context->setState(new StateShipped());
    }

    public function toString(): string {
        return 'created';
    }
}
