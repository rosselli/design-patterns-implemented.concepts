<?php
namespace Patterns\Behavioral\NullObject\Domnikl;

class Service {
    private $logger;

    public function __construct(Logger $logger) {
        $this->logger = $logger;
    }

    public function log(): void {
        # notice here that you don't have to check if the logger is set with eg. is_null(), instead just use it
        $this->logger->log('We are in '.__METHOD__);
    }
}
