<?php
namespace Patterns\Structural\Proxy\Domnikl;

class BankAccountProxy {
    private $bankAccount;
    private $balance;

    public function __construct(BankAccount $bankAccount) {
    	$this->bankAccount = $bankAccount;
	}

	public function getBalance(): int {

        # because calculating balance is so expensive,
        # the usage of BankAccount::getBalance() is delayed until it really is needed and will not be calculated again for this instance.
        if ($this->balance === null) {
            $this->balance = $this->bankAccount->getBalance();
        }
        return $this->balance;
    }
}
