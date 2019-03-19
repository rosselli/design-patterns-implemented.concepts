<?php
namespace Patterns\Structural\Proxy\KamranAhmed;

class LabDoor implements Door {
	public function open(): string {
		return "Opening the lab door";
	}

	public function close(): string {
		return "Closing the lab door";
	}
}
