<?php
namespace Patterns\Behavioral\State\KamranAhmed;

class UpperCase implements WritingState {
	public function write(string $words): string {
		return strtoupper($words);
	}
}
