<?php
namespace Patterns\Structural\Composite\Domnikl;

class InputElement implements Renderable {
    public function render(): string {
        return '<input type="text" />';
    }
}
