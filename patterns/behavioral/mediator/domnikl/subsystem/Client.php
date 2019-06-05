<?php
namespace Patterns\Behavioral\Mediator\Domnikl\Subsystem;

use Patterns\Behavioral\Mediator\Domnikl\Colleague;

class Client extends Colleague {
    public function request(): string {
        return $this->mediator->makeRequest();
    }

    public function output(string $content): string {
        return $content;
    }
}
