<?php
namespace Patterns\Behavioral\Mediator\Domnikl\Subsystem;

use Patterns\Behavioral\Mediator\Domnikl\Colleague;

# Client is a client that makes requests and gets the response.
class Client extends Colleague {
    public function request() {
        $this->mediator->makeRequest();
    }

    public function output(string $content) {
        echo $content;
    }
}
