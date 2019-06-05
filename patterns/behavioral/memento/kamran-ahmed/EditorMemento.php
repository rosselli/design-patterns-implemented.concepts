<?php
namespace Patterns\Behavioral\Memento\KamranAhmed;

class EditorMemento {
	protected $content;

	public function __construct(string $content) {
		$this->content = $content;
	}

	public function getContent(): string {
		return $this->content;
	}
}
