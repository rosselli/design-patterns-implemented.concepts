<?php
namespace Patterns\Structural\Adapter\KamranAhmed;

class AsianLion implements Lion {
	public function roar(): string {
		return 'Asian roaring.';
	}
}
