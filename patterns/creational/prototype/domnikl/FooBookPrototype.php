<?php
namespace Patterns\Creational\Prototype\Domnikl;

class FooBookPrototype extends BookPrototype {
    protected $category = 'Foo';
    public function __clone(){}
}
