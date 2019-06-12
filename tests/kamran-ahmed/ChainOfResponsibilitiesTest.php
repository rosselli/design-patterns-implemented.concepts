<?php
namespace Tests\KamranAhmed;

use Patterns\Behavioral\ChainOfResponsibilities\KamranAhmed\Bank;
use Patterns\Behavioral\ChainOfResponsibilities\KamranAhmed\Bitcoin;
use Patterns\Behavioral\ChainOfResponsibilities\KamranAhmed\Paypal;
use PHPUnit\Framework\TestCase;

class ChainOfResponsibilitiesTest extends TestCase {

	public function testChainOfResponsibilities() {
		# $bank->$paypal->$bitcoin
		# if bank can't pay then paypal. If paypal can't pay then bit coin
		$bank = new Bank(100);
		$paypal = new Paypal(200);
		$bitcoin = new Bitcoin(300);

		$bank->setNext($paypal);
		$paypal->setNext($bitcoin);

		$output = 'Cannot pay using Patterns\Behavioral\ChainOfResponsibilities\KamranAhmed\Bank. Proceeding...';
//		$bank->pay(259);
		$this->assertSame($output, $bank->pay(259));

// Cannot pay using bank. Proceeding ..
// Cannot pay using paypal. Proceeding ..:
// Paid 259 using Bitcoin!
	}

}
