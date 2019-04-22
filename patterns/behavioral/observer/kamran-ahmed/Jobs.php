<?php
namespace Patterns\Behavioral\Observer\KamranAhmed;

use SplSubject;

class Jobs {
	protected $title;
	protected $publishers;

	public function __construct(SplSubject $publishers) {
		$this->publishers = $publishers;
	}

	public function getTitle() {
		return $this->title;
	}

	public function addJob(string  $title) {
		$this->title = $title;
		$this->publishers->notify();
	}

	public function getPublishers() {
		return $this->publishers;
	}
}

