<?php
namespace Patterns\Behavioral\Visitor\KamranAhmed;

interface AnimalOperation {
	public function visitMonkey(Monkey $monkey);
	public function visitLion(Lion $lion);
	public function visitDolphin(Dolphin $dolphin);
}
