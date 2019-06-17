<?php
namespace Patterns\Structural\Bridge\Domnikl;

class PingService extends Service {
    public function get(): string {
        return $this->implementation->format('pong');
    }
}
