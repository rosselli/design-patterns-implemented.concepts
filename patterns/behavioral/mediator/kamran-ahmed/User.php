<?php
namespace Patterns\Behavioral\Mediator\KamranAhmed;

class User {
	protected $name;
	protected $chatRoomMediator;

	public function __construct(string $name, ChatRoomMediator $chatRoomMediator) {
		$this->name = $name;
		$this->chatRoomMediator = $chatRoomMediator;
	}

	public function getName(): string {
		return $this->name;
	}

	public function send($message): string {
		return $this->chatRoomMediator->showMessage($this, $message);
	}
}