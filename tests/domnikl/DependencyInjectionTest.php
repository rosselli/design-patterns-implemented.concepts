<?php
namespace DesignPatterns\Structural\DependencyInjection\Tests;

use Patterns\Structural\DependencyInjection\Domnikl\DatabaseConfiguration;
use Patterns\Structural\DependencyInjection\Domnikl\DatabaseConnection;
use PHPUnit\Framework\TestCase;

class DependencyInjectionTest extends TestCase {
    public function testDependencyInjection() {
        $config = new DatabaseConfiguration('localhost', 3306, 'me', '1234');
        $connection = new DatabaseConnection($config);
        $this->assertSame('me:1234@localhost:3306', $connection->getDsn());
    }
}
