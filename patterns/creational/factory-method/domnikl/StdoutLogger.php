<?php
namespace Patterns\Creational\FactoryMethod\Domnikl;

class StdoutLogger implements Logger {
    public function log(string $message): string {
        return $message;
    }
}
