<?php
namespace Patterns\Behavioral\Command\Domnikl;

class AddMessageDateCommand implements UndoableCommand {
    private $output;

    public function __construct(Receiver $console) {
        $this->output = $console;
    }

    public function execute(): void {
        $this->output->enableDate();
    }

    public function undo() {
        $this->output->disableDate();
    }
}
