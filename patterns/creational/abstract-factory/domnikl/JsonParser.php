<?php
namespace Patterns\Creational\AbstractFactory\Domnikl;

class JsonParser implements Parser {
    public function parse(string $input): array {
        return json_decode($input, true);
    }
}
