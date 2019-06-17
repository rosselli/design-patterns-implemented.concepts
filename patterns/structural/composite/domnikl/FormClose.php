<?php
namespace Patterns\Structural\Composite\Domnikl;

class FormClose implements Renderable {
    public function render(): string{
        return '</form>';
    }
}
