<?php
namespace Patterns\Creational\AbstractFactory\Domnikl;

interface Parser {
    public function parse(string $input): array;
}
