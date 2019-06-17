<?php
namespace Patterns\Structural\Composite\Domnikl;

class FormOpen implements Renderable {
    public function render(): string{
		return '<form>';
    }
}
