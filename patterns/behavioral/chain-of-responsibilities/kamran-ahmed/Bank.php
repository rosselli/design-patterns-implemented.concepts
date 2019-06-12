<?php
namespace Patterns\Behavioral\ChainOfResponsibilities\KamranAhmed;

class Bank extends Account {
	private $balance;

	public function __construct(float $balance) {
		$this->balance = $balance;
	}
}

