<?php
namespace Patterns\Behavioral\Mediator\Domnikl;

use Patterns\Behavioral\Mediator\Domnikl\Subsystem\Client;
use Patterns\Behavioral\Mediator\Domnikl\Subsystem\Database;
use Patterns\Behavioral\Mediator\Domnikl\Subsystem\Server;

/**
 * Mediator is the concrete Mediator for this design pattern
 * In this example, I have made a "Hello World" with the Mediator Pattern
 */
class Mediator implements MediatorInterface {
    private $server;
    private $database;
    private $client;

    public function __construct(Database $database, Client $client, Server $server){
        $this->database = $database;
        $this->server = $server;
        $this->client = $client;

        $this->database->setMediator($this);
        $this->server->setMediator($this);
        $this->client->setMediator($this);
    }

    public function makeRequest(){
        $this->server->process();
    }

    public function queryDb(): string{
        return $this->database->getData();
    }

    public function sendResponse($content){
        $this->client->output($content);
    }
}
