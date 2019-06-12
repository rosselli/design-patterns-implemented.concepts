<?php
namespace Patterns\Behavioral\ChainOfResponsibilities\KamranAhmed;

class Paypal extends Account {
	private $balance;

	public function __construct(float $balance) {
		$this->balance = $balance;
	}
}
