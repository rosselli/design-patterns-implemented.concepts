<?php
namespace Patterns\Behavioral\Strategy\KamranAhmed;

class Sorter {
	protected $sorter;

	public function __construct(SortStrategy $sorter) {
		$this->sorter = $sorter;
	}

	public function sort(array $dataset): array {
		return $this->sorter->sort($dataset);
	}
}