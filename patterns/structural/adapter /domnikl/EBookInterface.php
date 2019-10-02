<?php
namespace Patterns\Creational\Adapter\Domnikl;

interface EBookInterface {
    public function unlock(): void;
    public function pressNext(): void;

    # returns current page and total number of pages, like [10, 100] is page 10 of 100
    public function getPage(): array;
}
