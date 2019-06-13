<?php
namespace Patterns\Creational\FactoryMethod\KamranAhmed;

class MarketingManager extends HiringManager {
	protected function makeInterviewer(): Interviewer {
		return new CommunityExecutive();
	}
}
