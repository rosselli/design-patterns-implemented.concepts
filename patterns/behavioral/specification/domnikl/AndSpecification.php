<?php
namespace Patterns\Behavioral\Specification\Domnikl;

class AndSpecification implements SpecificationInterface {
    private $specifications;

    public function __construct(SpecificationInterface ...$specifications) {
        $this->specifications = $specifications;
    }

    # if at least one specification is false, return false, else return true.
    public function isSatisfiedBy(Item $item): bool {
        foreach ($this->specifications as $specification) {
            if (!$specification->isSatisfiedBy($item)) {
                return false;
            }
        }
        return true;
    }
}
