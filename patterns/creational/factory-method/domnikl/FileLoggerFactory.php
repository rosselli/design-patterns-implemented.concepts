<?php
namespace Patterns\Creational\FactoryMethod\Domnikl;

class FileLoggerFactory implements LoggerFactory {
    private $filePath;

    public function __construct(string $filePath) {
        $this->filePath = $filePath;
    }

    public function createLogger(): Logger {
        return new FileLogger($this->filePath);
    }
}
