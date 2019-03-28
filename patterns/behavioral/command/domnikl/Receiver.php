<?php
namespace Patterns\Behavioral\Command\Domnikl;

class Receiver {
    private $enableDate = false;
    private $output = [];

    public function write(string $str) {
        if ($this->enableDate) {
            $str .= ' ['.date('Y-m-d').']';
        }

        $this->output[] = $str;
    }

    public function getOutput(): string {
        return join(PHP_EOL, $this->output);
    }

    public function enableDate() {
        $this->enableDate = true;
    }

    public function disableDate() {
        $this->enableDate = false;
    }
}
