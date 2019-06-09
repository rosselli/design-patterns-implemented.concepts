<?php
namespace Patterns\Strategy\Alura;

class ISS implements Tax {

	public function calculate(Budget $budget){
		return $budget->getValue() * 0.05;
	}
}