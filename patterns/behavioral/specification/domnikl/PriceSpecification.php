<?php
namespace Patterns\Behavioral\Specification\Domnikl;

class PriceSpecification implements Specification {
    private $maxPrice;
    private $minPrice;

    public function __construct($minPrice, $maxPrice) {
        $this->minPrice = $minPrice;
        $this->maxPrice = $maxPrice;
    }

    public function isSatisfiedBy(Item $item): bool {
        if ($this->maxPrice !== null && $item->getPrice() > $this->maxPrice) {
            return false;
        }

        if ($this->minPrice !== null && $item->getPrice() < $this->minPrice) {
            return false;
        }
        return true;
    }
}
