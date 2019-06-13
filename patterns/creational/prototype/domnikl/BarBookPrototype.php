<?php
namespace Patterns\Creational\Prototype\Domnikl;

class BarBookPrototype extends BookPrototype {
    protected $category = 'Bar';
    public function __clone() {}
}
