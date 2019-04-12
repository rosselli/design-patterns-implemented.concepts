<?php
namespace Patterns\Behavioral\Mediator\Domnikl\Subsystem;

use Patterns\Behavioral\Mediator\Domnikl\Colleague;

class Database extends Colleague {
    public function getData(): string {
        return 'World';
    }
}
