<?php
namespace Patterns\Behavioral\Specification\Domnikl;

class OrSpecification implements Specification {
    private $specifications;

    public function __construct(Specification ...$specifications) {
        $this->specifications = $specifications;
    }

    # if at least one specification is true, return true, else return false
    public function isSatisfiedBy(Item $item): bool {
        foreach ($this->specifications as $specification) {
            if ($specification->isSatisfiedBy($item)) {
                return true;
            }
        }
        return false;
    }
}
