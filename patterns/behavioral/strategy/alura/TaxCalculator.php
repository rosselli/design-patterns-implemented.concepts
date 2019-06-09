<?php
namespace Patterns\Strategy\Alura;

class TaxCalculator{
	public function calculate(Budget $budget, Tax $tax){
		return $tax->calculate($budget);
	}
}