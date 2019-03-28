<?php
namespace Patterns\Behavioral\Command\Domnikl;

interface UndoableCommand extends Command {
    public function undo();
}
