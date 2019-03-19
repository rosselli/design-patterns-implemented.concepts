<?php
namespace Patterns\Structural\Proxy\KamranAhmed;

class SecuredDoor {
	protected $door;

	public function __construct(Door $door) {
		$this->door = $door;
	}

	public function open(string $password): string {
		if ($this->authenticate($password)) {
			$this->door->open();
		} else {
			return "Big no! It ain't possible.";
		}
	}

	public function authenticate($password): bool {
		return $password === '$ecr@t';
	}

	public function close(): string {
		$this->door->close();
	}
}
