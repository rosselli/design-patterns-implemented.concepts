<?php
namespace Patterns\Behavioral\State\KamranAhmed;

class LowerCase implements WritingState {
	public function write(string $words): string {
		return strtolower($words);
	}
}