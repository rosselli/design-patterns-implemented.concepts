<?php
namespace Tests\Domnikl;

use PHPUnit\Framework\TestCase;

class FluentInterfaceTest extends TestCase {
    public function testBuildSQL() {
        $query = (new Sql())
                ->select(['foo', 'bar'])
                ->from('foobar', 'f')
                ->where('f.bar = ?');

        $this->assertSame('SELECT foo, bar FROM foobar AS f WHERE f.bar = ?', (string) $query);
    }
}
