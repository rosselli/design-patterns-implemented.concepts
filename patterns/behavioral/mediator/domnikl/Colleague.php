<?php
namespace Patterns\Behavioral\Mediator\Domnikl;

# Colleague is an abstract colleague who works together but he only knows the Mediator, not other colleagues
abstract class Colleague {
    # this ensures no change in subclasses.
    protected $mediator;

    public function setMediator(MediatorInterface $mediator) {
        $this->mediator = $mediator;
    }
}
