<?php
namespace Patterns\Behavioral\Mediator\Domnikl\Subsystem;

use Patterns\Behavioral\Mediator\Domnikl\Colleague;

class Server extends Colleague {
    public function process() {
        $data = $this->mediator->queryDb();
        $this->mediator->sendResponse(sprintf("Hello %s", $data));
    }
}
