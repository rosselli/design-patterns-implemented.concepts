<?php
namespace Patterns\Behavioral\Visitor\Domnikl;

interface RoleVisitorInterface {
    public function visitUser(User $role);
    public function visitGroup(Group $role);
}
