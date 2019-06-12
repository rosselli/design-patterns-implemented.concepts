<?php
namespace Patterns\Behavioral\Observer\KamranAhmed;

class EmploymentAgency {
	private $observers = [];

	protected function notify(JobPost $jobPosting) {
		$output;
		foreach ($this->observers as $observer) {
			$output[] = $observer->onJobPosted($jobPosting);
		}
		return $output;
	}

	public function attach($observer): void {
		$this->observers[] = $observer;
	}

	public function addJob(JobPost $jobPosting): array {
		return $this->notify($jobPosting);
	}

	public function getObservers(): array {
		return $this->observers;
	}
}
