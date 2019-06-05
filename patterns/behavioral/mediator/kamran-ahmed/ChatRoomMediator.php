<?php
namespace Patterns\Behavioral\Mediator\KamranAhmed;

interface ChatRoomMediator  {
	public function showMessage(User $user, string $message): string;
}
