<?php
namespace Patterns\Creational\FactoryMethod\KamranAhmed;

class Developer implements Interviewer {
	public function askQuestions(): string {
		return 'Asking about design patterns';
	}
}
