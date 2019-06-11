<?php
namespace Patterns\Behavioral\Observer\KamranAhmed;

class JobSeeker {
	private $name;

	public function __construct(string $name) {
		$this->name = $name;
	}

	public function onJobPosted(JobPost $job): string {
		return 'Hi ' . $this->name . '! New job posted: '. $job->getTitle();
	}
}
