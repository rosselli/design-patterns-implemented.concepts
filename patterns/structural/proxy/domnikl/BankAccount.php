<?php
namespace Patterns\Structural\Proxy\Domnikl;

interface BankAccount {
    public function deposit(int $amount);
    public function getBalance(): int;
}
