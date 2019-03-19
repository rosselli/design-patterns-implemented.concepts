<?php
namespace Patterns\Structural\Proxy\Domnikl;

class HeavyBankAccount implements BankAccount {
    private $transactions = [];

    public function deposit(int $amount) {
        $this->transactions[] = $amount;
    }

    public function getBalance(): int {
        # heavy part of the job, calculate the balance
        return array_sum($this->transactions);
    }
}
