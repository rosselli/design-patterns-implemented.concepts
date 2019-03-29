<?php
namespace Patterns\Behavioral\Visitor\Domnikl;

interface Role {
    public function accept(RoleVisitorInterface $visitor);
}
