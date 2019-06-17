<?php
namespace Patterns\Structural\Adapter\KamranAhmed;

class AfricanLion implements Lion {
	public function roar(): string {
		return 'African roaring.';
	}
}
