<?php
namespace DesignPatterns\Creational\FactoryMethod\Tests;

use Patterns\Creational\FactoryMethod\Domnikl\FileLogger;
use Patterns\Creational\FactoryMethod\Domnikl\FileLoggerFactory;
use Patterns\Creational\FactoryMethod\Domnikl\StdoutLogger;
use Patterns\Creational\FactoryMethod\Domnikl\StdoutLoggerFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase {

    public function testCanCreateStdoutLogging(){
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();
        $this->assertInstanceOf(StdoutLogger::class, $logger);
    }

    public function testCanCreateFileLogging() {
        $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
        $logger = $loggerFactory->createLogger();
        $this->assertInstanceOf(FileLogger::class, $logger);
    }
}
