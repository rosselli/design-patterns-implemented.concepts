<?php
namespace Patterns\Behavioral\Visitor\KamranAhmed;

interface Animal {
    public function accept(AnimalOperation $operation);
}

