<?php
namespace Patterns\Structural\Bridge\Domnikl;

interface Formatter {
    public function format(string $text): string;
}
