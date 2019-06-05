<?php
namespace Patterns\Behavioral\Memento\Domnikl;

class Memento {
    private $state;

    public function __construct(State $stateToSave) {
        $this->state = $stateToSave;
    }

    public function getState(): State {
        return $this->state;
    }
}
