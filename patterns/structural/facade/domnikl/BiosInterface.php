<?php
namespace Patterns\Structural\Facade\Domnikl;

interface BiosInterface {
    public function execute();
    public function waitForKeyPress();
    public function launch(OsInterface $os);
    public function powerDown();
}
