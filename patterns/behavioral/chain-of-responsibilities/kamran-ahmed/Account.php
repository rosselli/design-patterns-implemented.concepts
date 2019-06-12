<?php
namespace Patterns\Behavioral\ChainOfResponsibilities\KamranAhmed;

abstract class Account {
	private $successor;
	private $balance;

	public function setNext(Account $account) {
		$this->successor = $account;
	}

	public function pay(float $amountToPay): string {
		if ($this->canPay($amountToPay)) {
			return sprintf('Paid %s using %s', $amountToPay, get_called_class());
		} elseif ($this->successor) {
			return sprintf('Cannot pay using %s. Proceeding...', get_called_class());
			$this->successor->pay($amountToPay);
		} else {
			throw new Exception('None of the accounts have enough balance');
		}
	}

	public function canPay($amount): bool {
		return $this->balance >= $amount;
	}
}
