<?php
namespace Patterns\Behavioral\State\Domnikl;

interface State{
    public function proceedToNext(OrderContext $context): void;
    public function toString(): string;
}
