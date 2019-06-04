<?php
namespace Patterns\Behavioral\Visitor\Domnikl;

class RoleVisitor implements RoleVisitorInterface {
    private $visited = [];

    public function visitGroup(Group $role): void  {
        $this->visited[] = $role;
    }

    public function visitUser(User $role): void {
        $this->visited[] = $role;
    }

    public function getVisited(): array {
        return $this->visited;
    }
}
