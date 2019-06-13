<?php
namespace Patterns\Creational\AbstractFactory\Domnikl;

class CsvParser implements Parser {
    const HEADER = true;
    const NO_HEADER = false;
    private $skipHeaderLine;

    public function __construct(bool $skipHeaderLine) {
        $this->skipHeaderLine = $skipHeaderLine;
    }

    public function parse(string $input): array {
        $headerWasParsed = false;
        $parsedLines = [];

        foreach (explode(PHP_EOL, $input) as $line) {
            if (!$headerWasParsed && $this->skipHeaderLine === self::HEADER) {
                $headerWasParsed = true;
                continue;
            }
            $parsedLines[] = str_getcsv($line);
        }
        return $parsedLines;
    }
}
