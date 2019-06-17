<?php
namespace Patterns\Structural\Bridge\KamranAhmed;

class DarkTheme implements Theme {
	public function getColor(): string {
		return 'Dark Black';
	}
}
