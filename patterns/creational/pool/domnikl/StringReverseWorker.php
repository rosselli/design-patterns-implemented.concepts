<?php
namespace Patterns\Creational\Pool\Domnikl;

class StringReverseWorker {
    private $createdAt;

    public function __construct() {
        $this->createdAt = new \DateTime();
    }

    public function run(string $text): string {
        return strrev($text);
    }
}
