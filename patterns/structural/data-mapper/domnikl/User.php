<?php
namespace Patterns\Structural\DataMapper\Domnikl;

class User {
    private $username;
    private $email;

    public function __construct(string $username, string $email) {
        // validate parameters before setting them!
        $this->username = $username;
        $this->email = $email;
    }

    public static function fromState(array $state): User {
        // validate state before accessing keys!
        return new self(
            $state['username'],
            $state['email']
        );
    }

    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }
}
