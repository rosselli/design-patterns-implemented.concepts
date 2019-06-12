<?php
namespace Patterns\Behavioral\Visitor\KamranAhmed;

interface AnimalOperation {
	public function visitMonkey(Monkey $monkey): string;
	public function visitLion(Lion $lion): string;
	public function visitDolphin(Dolphin $dolphin): string;
}
