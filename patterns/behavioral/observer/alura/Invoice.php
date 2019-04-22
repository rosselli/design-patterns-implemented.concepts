<?php
namespace Patterns\Observer\Alura;

class Invoice {
	private $company;
	private $cnpj;
	private $items;
	private $value;
	private $tax;
	private $comments;
	private $date;

	function __construct($company, $cnpj, $items, $value, $tax, $comments, $date) {
		$this->company = $company;
		$this->cnpj = $cnpj;
		$this->items = $items;
		$this->value = $value;
		$this->tax = $tax;
		$this->comments = $comments;
		$this->date = $date;
	}
}