<?php
namespace Patterns\Behavioral\Strategy\KamranAhmed;

interface SortStrategy {
	public function sort(array $dataset): array;
}
