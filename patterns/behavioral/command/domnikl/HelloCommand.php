<?php
namespace Patterns\Behavioral\Command\Domnikl;

class HelloCommand implements Command {
    private $output;

    public function __construct(Receiver $console) {
        $this->output = $console;
    }

    public function execute() {
        $this->output->write('Hello World');
    }
}
