<?php
namespace Patterns\Behavioral\Visitor\Domnikl;

class RoleVisitor implements RoleVisitorInterface {
    private $visited = [];

    public function visitGroup(Group $role) {
        $this->visited[] = $role;
    }

    public function visitUser(User $role){
        $this->visited[] = $role;
    }

    public function getVisited(): array {
        return $this->visited;
    }
}
