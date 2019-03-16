<?php
namespace Tests\Domnikl;

use Patterns\Behavioral\Specification\Domnikl\AndSpecification;
use Patterns\Behavioral\Specification\Domnikl\Item;
use Patterns\Behavioral\Specification\Domnikl\NotSpecification;
use Patterns\Behavioral\Specification\Domnikl\OrSpecification;
use Patterns\Behavioral\Specification\Domnikl\PriceSpecification;
use PHPUnit\Framework\TestCase;

class SpecificationTest extends TestCase {
    public function testCanOr() {
        $spec1 = new PriceSpecification(50, 99);
        $spec2 = new PriceSpecification(101, 200);

        $orSpec = new OrSpecification($spec1, $spec2);

        $this->assertFalse($orSpec->isSatisfiedBy(new Item(100)));
        $this->assertTrue($orSpec->isSatisfiedBy(new Item(51)));
        $this->assertTrue($orSpec->isSatisfiedBy(new Item(150)));
    }

    public function testCanAnd() {
        $spec1 = new PriceSpecification(50, 100);
        $spec2 = new PriceSpecification(80, 200);

        $andSpec = new AndSpecification($spec1, $spec2);

        $this->assertFalse($andSpec->isSatisfiedBy(new Item(1)));
        $this->assertFalse($andSpec->isSatisfiedBy(new Item(51)));
        $this->assertFalse($andSpec->isSatisfiedBy(new Item(150)));
        $this->assertTrue($andSpec->isSatisfiedBy(new Item(100)));
    }

    public function testCanNot() {
        $spec1 = new PriceSpecification(50, 100);
        $notSpec = new NotSpecification($spec1);

        $this->assertTrue($notSpec->isSatisfiedBy(new Item(150)));
        $this->assertFalse($notSpec->isSatisfiedBy(new Item(50)));
    }
}
