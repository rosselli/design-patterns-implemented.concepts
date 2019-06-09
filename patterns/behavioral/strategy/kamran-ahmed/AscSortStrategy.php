<?php
namespace Patterns\Behavioral\Strategy\KamranAhmed;

class AscSortStrategy implements SortStrategy {
	public function sort(array $dataset): array {
		sort($dataset);
		return $dataset;
	}
}