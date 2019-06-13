<?php
namespace Patterns\Creational\Prototype\Domnikl;

abstract class BookPrototype{
    protected $title;
    protected $category;

    abstract public function __clone();

    public function getTitle(): string {
        return $this->title;
    }

    public function setTitle($title): void {
        $this->title = $title;
    }
}
