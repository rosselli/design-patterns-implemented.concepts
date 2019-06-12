<?php
namespace Patterns\Behavioral\ChainOfResponsibilities\KamranAhmed;

class Bitcoin extends Account {
	private $balance;

	public function __construct(float $balance) {
		$this->balance = $balance;
	}
}
