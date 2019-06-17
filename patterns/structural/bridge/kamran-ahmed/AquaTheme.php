<?php
namespace Patterns\Structural\Bridge\KamranAhmed;

class AquaTheme implements Theme {
	public function getColor(): string {
		return 'Light blue';
	}
}
