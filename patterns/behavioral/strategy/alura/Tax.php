<?php
namespace Patterns\Strategy\Alura;

interface Tax {
	public function calculate(Budget $budget);
}