<?php
namespace Patterns\Behavioral\Command\KamranAhmed;

interface Command {
	public function execute(): void ;
	public function undo(): void ;
	public function redo(): void ;
}