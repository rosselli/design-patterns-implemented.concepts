<?php
namespace Patterns\Structural\Bridge\KamranAhmed;

class LightTheme implements Theme {
	public function getColor(): string {
		return 'Off white';
	}
}
