<?php
namespace Tests\KamranAhmed;

use PHPUnit\Framework\TestCase;

class ChainOfResponsibilitiesTest extends TestCase {

	public function test() {
		# $bank->$paypal->$bitcoin
		# if bank can't pay then paypal. If paypal can't pay then bit coin
		$bank = new Bank(100);
		$paypal = new Paypal(200);
		$bitcoin = new Bitcoin(300);

		$bank->setNext($paypal);
		$paypal->setNext($bitcoin);

		$bank->pay(259);

// Output will be
// ==============
// Cannot pay using bank. Proceeding ..
// Cannot pay using paypal. Proceeding ..:
// Paid 259 using Bitcoin!
	}

}
