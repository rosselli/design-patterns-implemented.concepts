<?php
namespace Patterns\Behavioral\Mediator\Domnikl;

abstract class Colleague {
    protected $mediator;

    public function setMediator(MediatorInterface $mediator): void {
        $this->mediator = $mediator;
    }
}
