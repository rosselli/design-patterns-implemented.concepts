<?php
namespace Patterns\Structural\Adapter\KamranAhmed;

class Hunter {
	public function hunt(Lion $lion) {
		return $lion->roar();
	}
}
