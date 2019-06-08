<?php
namespace Patterns\Behavioral\State\KamranAhmed;

class DefaultText implements WritingState {
	public function write(string $words): string {
		return $words;
	}
}