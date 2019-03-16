<?php
namespace Patterns\Behavioral\Specification\Domnikl;

use Patterns\Behavioral\Specification\Domnikl\Item;
use Patterns\Behavioral\Specification\Domnikl\Specification;

class NotSpecification implements Specification {
    private $specification;

    public function __construct(Specification $specification) {
        $this->specification = $specification;
    }

    public function isSatisfiedBy(Item $item): bool {
        return !$this->specification->isSatisfiedBy($item);
    }
}
