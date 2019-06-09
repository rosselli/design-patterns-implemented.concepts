<?php
namespace Patterns\Behavioral\Strategy\Domnikl;

interface ComparatorInterface {
    public function compare($a, $b): int;
}
