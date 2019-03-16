<?php
namespace Patterns\Structural\DataMapper\Domnikl;

class User {
    private $username;
    private $email;

    public function __construct(string $username, string $email) {
        $this->username = $username;
        $this->email = $email;
    }

    public static function fromState(array $state): User {
        return new self($state['username'], $state['email']);
    }

    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }
}
