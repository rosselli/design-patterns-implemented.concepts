<?php
namespace Patterns\Creational\FactoryMethod\KamranAhmed;

class DevelopmentManager extends HiringManager {
	protected function makeInterviewer(): Interviewer {
		return new Developer();
	}
}
