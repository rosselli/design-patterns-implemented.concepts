<?php
namespace Patterns\Structural\Bridge\Domnikl;

class PlainTextFormatter implements Formatter {
    public function format(string $text): string {
        return $text;
    }
}
