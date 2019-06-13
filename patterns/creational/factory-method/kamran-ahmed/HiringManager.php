<?php
namespace Patterns\Creational\FactoryMethod\KamranAhmed;

abstract class HiringManager {

	# Factory method
	abstract protected function makeInterviewer(): Interviewer;

	public function takeInterview(): string {
		$interviewer = $this->makeInterviewer();
		return $interviewer->askQuestions();
	}
}
