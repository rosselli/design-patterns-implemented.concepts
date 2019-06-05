<?php
namespace Patterns\Behavioral\Command\Domnikl;

class Receiver {
    private $enableDate = false;
    private $output = [];

    public function write(string $str): void {
        if ($this->enableDate) {
            $str .= ' ['.date('Y-m-d').']';
        }

        $this->output[] = $str;
    }

    public function getOutput(): string {
        return join(PHP_EOL, $this->output);
    }

    public function enableDate(): void {
        $this->enableDate = true;
    }

    public function disableDate(): void {
        $this->enableDate = false;
    }
}
