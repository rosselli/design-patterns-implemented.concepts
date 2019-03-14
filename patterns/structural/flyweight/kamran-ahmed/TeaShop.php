<?php
namespace Patterns\Structural\Flyweight\KamranAhmed;

class TeaShop {
	protected $orders;
	protected $teaMaker;
	protected $messages;

	public function __construct(TeaMaker $teaMaker) {
		$this->teaMaker = $teaMaker;
	}

	public function takeOrder(string $teaType, int $table) {
		$this->orders[$table] = $this->teaMaker->make($teaType);
	}

	public function serve(): array {
		foreach ($this->orders as $table => $tea) {
			$this->messages[] = "Serving tea to table #".$table;
		}
		return $this->messages;
	}
}