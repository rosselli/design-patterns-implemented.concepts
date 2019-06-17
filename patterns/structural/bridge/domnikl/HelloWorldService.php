<?php
namespace Patterns\Structural\Bridge\Domnikl;

class HelloWorldService extends Service {
    public function get(): string {
        return $this->implementation->format('Hello World');
    }
}
