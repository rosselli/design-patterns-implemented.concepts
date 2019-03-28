<?php
namespace Patterns\Behavioral\Command\KamranAhmed;

interface Command {
	public function execute();
	public function undo();
	public function redo();
}