<?php
namespace Patterns\Creational\AbstractFactory\Domnikl;

class ParserFactory {
    public function createCsvParser(bool $skipHeaderLine): Parser {
        return new CsvParser($skipHeaderLine);
    }

    public function createJsonParser(): Parser {
        return new JsonParser();
    }
}
