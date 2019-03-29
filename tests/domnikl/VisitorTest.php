<?php
namespace Tests\Domnikl;

use Patterns\Behavioral\Visitor\Domnikl\Group;
use Patterns\Behavioral\Visitor\Domnikl\Role;
use Patterns\Behavioral\Visitor\Domnikl\RoleVisitor;
use Patterns\Behavioral\Visitor\Domnikl\User;
use PHPUnit\Framework\TestCase;

class VisitorTest extends TestCase {
    private $visitor;

    protected function setUp() {
        $this->visitor = new RoleVisitor();
    }

    public function provideRoles() {
        return [
            [new User('Dominik')],
            [new Group('Administrators')]
        ];
    }

    /**
     * @dataProvider provideRoles
     */
    public function testVisitSomeRole(Role $role) {
        $role->accept($this->visitor);
        $this->assertSame($role, $this->visitor->getVisited()[0]);
    }
}
