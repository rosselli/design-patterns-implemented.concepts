<?php
namespace Patterns\Structural\Composite\Domnikl;

class TextElement implements Renderable {
    private $text;

    public function __construct(string $text) {
        $this->text = $text;
    }

    public function render(): string {
        return $this->text;
    }
}
