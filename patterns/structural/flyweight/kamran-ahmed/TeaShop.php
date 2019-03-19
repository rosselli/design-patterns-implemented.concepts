<?php
namespace Patterns\Structural\Flyweight\KamranAhmed;

class TeaShop {
	protected $orders;
	protected $teaFactory;
	protected $messages;

	public function __construct(TeaFactory $teaFactory) {
		$this->teaFactory = $teaFactory;
	}

	public function takeOrder(string $teaType, int $table): void {
		$this->orders[$table] = $this->teaFactory->make($teaType);
	}

	public function serve(): array {
		foreach ($this->orders as $table => $tea) {
			$this->messages[] = "Serving ".$tea->getType()." to table #".$table;
		}
		return $this->messages;
	}
}