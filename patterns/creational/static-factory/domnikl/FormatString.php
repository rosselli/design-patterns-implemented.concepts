<?php
namespace Patterns\Creational\StaticFactory\Domnikl;

class FormatString implements Formatter {
    public function format(string $input): string {
        return $input;
    }
}
