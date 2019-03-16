<?php
namespace Tests\Domnikl;

use Patterns\Structural\DataMapper\Domnikl\StorageAdapter;
use Patterns\Structural\DataMapper\Domnikl\User;
use Patterns\Structural\DataMapper\Domnikl\UserMapper;
use PHPUnit\Framework\TestCase;

class DataMapperTest extends TestCase {
    public function testCanMapUserFromStorage() {
        $storage = new StorageAdapter([1 => ['username' => 'me', 'email' => 'me@gmail.com']]);
        $mapper = new UserMapper($storage);
        $user = $mapper->findById(1);
        $this->assertInstanceOf(User::class, $user);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testWillNotMapInvalidData() {
        $storage = new StorageAdapter([]);
        $mapper = new UserMapper($storage);
        $mapper->findById(1);
    }
}
