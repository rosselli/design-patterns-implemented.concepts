<?php
namespace Patterns\Behavioral\Visitor\Domnikl;

interface RoleVisitorInterface {
    public function visitUser(User $role): void ;
    public function visitGroup(Group $role): void ;
}
