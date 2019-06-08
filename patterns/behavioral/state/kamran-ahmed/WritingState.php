<?php
namespace Patterns\Behavioral\State\KamranAhmed;

interface WritingState {
	public function write(string $words): string;
}
