<?php
namespace Patterns\Creational\StaticFactory\Domnikl;

# static means global state which is evil because it can't be mocked for tests
# Cannot be subclassed or mock-upped or have multiple different instances.

final class StaticFactory {
	public static function factory(string $type): Formatter {
        if ($type == 'number') {
            return new FormatNumber();
        } elseif ($type == 'string') {
            return new FormatString();
        }
        throw new \InvalidArgumentException('Unknown format given');
    }
}
