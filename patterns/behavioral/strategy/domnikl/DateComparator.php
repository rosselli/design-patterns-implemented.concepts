<?php
namespace Patterns\Behavioral\Strategy\Domnikl;

class DateComparator implements ComparatorInterface {
    public function compare($a, $b): int {
        $aDate = new \DateTime($a['date']);
        $bDate = new \DateTime($b['date']);
        return $aDate <=> $bDate;
    }
}
