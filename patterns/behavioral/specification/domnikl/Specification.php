<?php
namespace Patterns\Behavioral\Specification\Domnikl;

interface Specification {
    public function isSatisfiedBy(Item $item): bool;
}
