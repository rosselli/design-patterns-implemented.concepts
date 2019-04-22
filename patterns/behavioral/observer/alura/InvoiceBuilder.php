<?php
namespace Patterns\Observer\Alura;

class InvoiceBuilder {
	private $company;
	private $cnpj;
	private $items;
	private $value;
	private $tax;
	private $comments;
	private $date;
	private $actionsAfterBuild;

	function __construct() {
		$this->items = [];
		$this->value = 0;
		$this->tax = 0;
		$this->actionsAfterBuild = [];
	}

	public function addCompany($company){
		$this->company = $company;
	}

	public function addCnpj($cnpj){
		$this->cnpj = $cnpj;
	}
	public function addItem(Item $item){
		$this->items[] = $item;
		$this->value += $item->getValue();
		$this->tax += $item->getValue() * 0.2;
	}

    public function addComments($comments){
		$this->comments = $comments;
	}

	public function addDate($date = null){
		$this->date = (is_null($date)) ? date("Y-m-d h:m:s") : $date;
	}

	public function addAction(ActionAfterBuild $action){
		$this->actionsAfterBuild[] = $action;
	}

    public function build(){
		$nf = new Invoice($this->company, $this->cnpj, $this->items, $this->value, $this->tax, $this->comments, $this->date);
		
		foreach($this->actionsAfterBuild as $a){
			$a->run($nf);
		}
		
		return $nf;
	}

}