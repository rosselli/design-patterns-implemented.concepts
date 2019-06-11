<?php
namespace Patterns\Behavioral\ChainOfResponsibilities\Domnikl\Responsible;

use Patterns\Behavioral\ChainOfResponsibilities\Domnikl\Handler;
use Psr\Http\Message\RequestInterface;

class HttpInMemoryCacheHandler extends Handler {
    private $data;

    public function __construct(array $data, Handler $successor = null) {
        parent::__construct($successor);
        $this->data = $data;
    }

    protected function processing(RequestInterface $request) {
        $key = sprintf('%s?%s',
            $request->getUri()->getPath(),
            $request->getUri()->getQuery()
        );

        if ($request->getMethod() == 'GET' && isset($this->data[$key])) {
            return $this->data[$key];
        }
        return null;
    }
}
