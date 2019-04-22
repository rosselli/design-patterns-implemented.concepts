<?php
namespace Patterns\Behavioral\Observer\KamranAhmed;

use SplObserver;
use SplSubject;

class JobSubscribers implements SplObserver {
	private $name;
	private $changedJobs;

	public function __construct(string $name) {
		$this->name = $name;
	}

	public function update(SplSubject $SplSubject) {
		return $this->changedJobs[] = $SplSubject;
	}

	public function getName() {
		return $this->name;
	}

	public function getChangedJobs(){
		return $this->changedJobs;
	}
}
