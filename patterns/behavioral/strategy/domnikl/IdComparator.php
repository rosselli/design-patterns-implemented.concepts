<?php
namespace Patterns\Behavioral\Strategy\Domnikl;

class IdComparator implements ComparatorInterface {
    public function compare($a, $b): int {
        return $a['id'] <=> $b['id'];
    }
}
