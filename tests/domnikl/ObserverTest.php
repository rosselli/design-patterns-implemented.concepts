<?php
namespace Tests\Domnikl;

use Patterns\Behavioral\Observer\Domnikl\User;
use Patterns\Behavioral\Observer\Domnikl\UserObserver;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase {
    public function testChangeInUserLeadsToUserObserverBeingNotified() {
        $observer = new UserObserver();

        $user = new User();
        $user->attach($observer);

        $user->changeEmail('foo@bar.com');
        $this->assertCount(1, $observer->getChangedUsers());
        $user->changeEmail('bar@bar.com');
        var_dump($observer->getChangedUsers());
        $this->assertCount(2, $observer->getChangedUsers());
        $user->changeEmail('green@bar.com');
        $user->changeEmail('red@bar.com');
        $this->assertCount(4, $observer->getChangedUsers());
    }
}
