<?php
namespace Patterns\Behavioral\Mediator\Domnikl\Subsystem;

use Patterns\Behavioral\Mediator\Domnikl\Colleague;

class Server extends Colleague {
    public function process(): string {
        return $this->mediator->sendResponse(sprintf("Hello %s", $this->mediator->queryDb()));
    }
}
