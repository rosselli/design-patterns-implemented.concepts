<?php
namespace Patterns\Behavioral\NullObject\Domnikl;

class PrintLogger implements LoggerInterface {
    public function log(string $str) {
        echo $str;
    }
}
