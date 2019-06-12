<?php
namespace Patterns\Behavioral\Command\KamranAhmed;

class RemoteControl {
	public function submit(Command $command): void  {
		$command->execute();
	}
}