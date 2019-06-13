<?php
namespace Patterns\Creational\FactoryMethod\Domnikl;

interface LoggerFactory {
    public function createLogger(): Logger;
}
