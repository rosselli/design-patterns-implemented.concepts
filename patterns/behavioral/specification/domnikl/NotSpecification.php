<?php
namespace Patterns\Behavioral\Specification\Domnikl;

use Patterns\Behavioral\Specification\Domnikl\Item;
use Patterns\Behavioral\Specification\Domnikl\SpecificationInterface;

class NotSpecification implements SpecificationInterface {
    private $specification;

    public function __construct(SpecificationInterface $specification) {
        $this->specification = $specification;
    }

    public function isSatisfiedBy(Item $item): bool {
        return !$this->specification->isSatisfiedBy($item);
    }
}
