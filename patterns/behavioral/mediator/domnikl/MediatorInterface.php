<?php
namespace Patterns\Behavioral\Mediator\Domnikl;

# This interface is not mandatory but it is better for Liskov substitution principle concerns.
interface MediatorInterface {
    public function sendResponse($content);
    public function makeRequest();
    public function queryDb();
}
