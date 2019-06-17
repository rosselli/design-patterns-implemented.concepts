<?php
namespace Patterns\Structural\Composite\Domnikl;

class Render {
    private $elements;

    public function make(): string{
    	$elements = '';
        foreach ($this->elements as $element) {
            $elements .= $element->render();
        }
        return $elements;
    }

    public function addElement(Renderable $element){
        $this->elements[] = $element;
    }
}
