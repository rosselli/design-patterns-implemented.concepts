<?php
namespace Patterns\Behavioral\Observer\Domnikl;

use SplObserver;
use SplSubject;

class UserObserver implements SplObserver {
    private $changedUsers = [];

    # It is called by the Subject, usually by SplSubject::notify()
    public function update(SplSubject $subject) {
        $this->changedUsers[] = clone $subject;
    }

    public function getChangedUsers(): array {
        return $this->changedUsers;
    }
}
