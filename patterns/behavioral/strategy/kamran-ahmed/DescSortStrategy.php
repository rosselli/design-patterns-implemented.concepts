<?php
namespace Patterns\Behavioral\Strategy\KamranAhmed;

class DescSortStrategy implements SortStrategy {
	public function sort(array $dataset): array {
		rsort($dataset);
		return $dataset;
	}
}
