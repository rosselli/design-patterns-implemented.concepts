<?php
namespace Patterns\Behavioral\Mediator\KamranAhmed;

class ChatRoom implements ChatRoomMediator {
	public function showMessage(User $user, string $message): string {
		$time = date('M d, y H:i');
		$sender = $user->getName();
		return $time.'['.$sender.']:'.$message;
	}
}
