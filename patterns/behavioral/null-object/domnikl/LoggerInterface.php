<?php
namespace Patterns\Behavioral\NullObject\Domnikl;

# Key feature: NullLogger must inherit from this interface like any other loggers
interface LoggerInterface{
    public function log(string $str);
}
