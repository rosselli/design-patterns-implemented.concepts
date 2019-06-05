<?php
namespace Patterns\Behavioral\Memento\KamranAhmed;

class Editor {
	protected $content = '';

	public function type(string $words): void {
		$this->content .= $words;
	}

	public function getContent(): string {
		return $this->content;
	}

	public function save(): EditorMemento {
		return new EditorMemento($this->content);
	}

	public function restore(EditorMemento $memento): void {
		$this->content = $memento->getContent();
	}
}
