<?php
namespace Patterns\Creational\FactoryMethod\Domnikl;

class StdoutLoggerFactory implements LoggerFactory{
    public function createLogger(): Logger{
        return new StdoutLogger();
    }
}
