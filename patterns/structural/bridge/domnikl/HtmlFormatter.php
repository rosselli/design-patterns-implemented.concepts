<?php
namespace Patterns\Structural\Bridge\Domnikl;

class HtmlFormatter implements Formatter {
    public function format(string $text): string {
        return sprintf('<p>%s</p>', $text);
    }
}
