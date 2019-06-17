<?php
namespace Patterns\Structural\Bridge\Domnikl;

abstract class Service {
    protected $implementation;

    public function __construct(Formatter $printer) {
        $this->implementation = $printer;
    }

    public function setImplementation(Formatter $printer): void {
        $this->implementation = $printer;
    }

    abstract public function get(): string;
}
