<?php
namespace Patterns\Behavioral\ChainOfResponsibilities\Domnikl\Responsible;

use Patterns\Behavioral\ChainOfResponsibilities\Domnikl\Handler;
use Psr\Http\Message\RequestInterface;

class SlowDatabaseHandler extends Handler {

    protected function processing(RequestInterface $request): string {
        # this is a mockup, in production code you would ask a slow (compared to in-memory) DB for the results
        return 'Hello World!';
    }
}
