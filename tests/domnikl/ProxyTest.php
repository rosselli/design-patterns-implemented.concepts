<?php
namespace Tests\Domnikl;

use Patterns\Structural\Proxy\Domnikl\BankAccountProxy;
use Patterns\Structural\Proxy\Domnikl\HeavyBankAccount;
use PHPUnit\Framework\TestCase;

class ProxyTest extends TestCase {
    public function testProxyWillOnlyExecuteExpensiveGetBalanceOnce() {
		$heavy = new HeavyBankAccount();
        $bankAccount = new BankAccountProxy($heavy);
        $heavy->deposit(30);

        // this time balance is being calculated
        $this->assertSame(30, $bankAccount->getBalance());

        // inheritance allows for BankAccountProxy to behave to an outsider exactly like HeavyBankAccount
        $heavy->deposit(50);

        // this time the previously calculated balance is returned again without re-calculating it
        $this->assertSame(30, $bankAccount->getBalance());
        $this->assertSame(80, $heavy->getBalance());
    }
}
