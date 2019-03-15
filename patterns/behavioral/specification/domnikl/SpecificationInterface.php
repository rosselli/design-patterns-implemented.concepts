<?php
namespace Patterns\Behavioral\Specification\Domnikl;

interface SpecificationInterface {
    public function isSatisfiedBy(Item $item): bool;
}
