<?php
namespace Patterns\Behavioral\NullObject\Domnikl;

class NullLogger implements Logger{
    public function log(string $str): void{
    }
}
