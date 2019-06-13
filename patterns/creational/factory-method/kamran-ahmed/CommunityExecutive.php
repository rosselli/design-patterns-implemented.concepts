<?php
namespace Patterns\Creational\FactoryMethod\KamranAhmed;

class CommunityExecutive implements Interviewer {
	public function askQuestions(): string {
		return 'Asking about community building';
	}
}
