<?php
namespace Patterns\Behavioral\Observer\KamranAhmed;

use SplObjectStorage;
use SplObserver;
use SplSubject;

class JobPublishers implements SplSubject {
	private $observers;

	public function __construct() {
		$this->observers = new SplObjectStorage();
	}

	public function attach(SplObserver $observer) {
		$this->observers->attach($observer);
	}

	public function detach(SplObserver $observer) {
		$this->observers->detach($observer);
	}

	public function notify() {
		foreach ($this->observers as $observer) {
			$observer->update($this);
		}
	}

	public function getObservers() {
		return $this->observers;
	}
}
