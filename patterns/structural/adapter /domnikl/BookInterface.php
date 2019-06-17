<?php
namespace Patterns\Creational\Adapter\Domnikl;

interface BookInterface {
    public function open(): void;
    public function turnPage(): void;
    public function getPage(): int;
}
