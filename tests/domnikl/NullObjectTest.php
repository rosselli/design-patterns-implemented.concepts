<?php
namespace Tests\Domnikl;

use Patterns\Behavioral\NullObject\Domnikl\NullLogger;
use Patterns\Behavioral\NullObject\Domnikl\PrintLogger;
use Patterns\Behavioral\NullObject\Domnikl\Service;
use PHPUnit\Framework\TestCase;

class LoggerTest extends TestCase {
    public function testNullObject() {
        $service = new Service(new NullLogger());
        $this->expectOutputString('');
        $service->log();
    }

    public function testStandardLogger() {
        $service = new Service(new PrintLogger());
        $this->expectOutputString('We are in Patterns\Behavioral\NullObject\Domnikl\Service::log');
        $service->log();
    }
}
