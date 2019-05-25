<?php
namespace Patterns\Behavioral\NullObject\Domnikl;

class PrintLogger implements Logger {
    public function log(string $str): void {
        echo $str;
    }
}
