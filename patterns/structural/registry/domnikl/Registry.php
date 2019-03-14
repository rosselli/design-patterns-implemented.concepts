<?php
namespace Patterns\Structural\Proxy\Domnikl;

abstract class Registry {
    const LOGGER = 'logger';

    /**
     * this introduces global state in your application which can not be mocked up for testing
     * and is therefor considered an anti-pattern! Use dependency injection instead!
     */
    private static $storedValues = [];
    private static $allowedKeys = [self::LOGGER,];

    public static function set(string $key, $value) {
        if (!in_array($key, self::$allowedKeys)) {
            throw new \InvalidArgumentException('Invalid key given');
        }
        self::$storedValues[$key] = $value;
    }

    public static function get(string $key) {
        if (!in_array($key, self::$allowedKeys) || !isset(self::$storedValues[$key])) {
            throw new \InvalidArgumentException('Invalid key given');
        }
        return self::$storedValues[$key];
    }
}
