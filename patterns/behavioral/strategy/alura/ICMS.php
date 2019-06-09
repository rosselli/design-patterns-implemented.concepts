<?php
namespace Patterns\Strategy\Alura;

class ICMS implements Tax {

	public function calculate(Budget $budget){
		return $budget->getValue() * 0.1;
	}
}