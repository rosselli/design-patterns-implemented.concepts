<?php
namespace Tests\Domnikl;

use Patterns\Structural\Bridge\Domnikl\HelloWorldService;
use Patterns\Structural\Bridge\Domnikl\HtmlFormatter;
use Patterns\Structural\Bridge\Domnikl\PlainTextFormatter;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase {
    public function testCanPrintUsingThePlainTextFormatter() {
        $service = new HelloWorldService(new PlainTextFormatter());

        $this->assertSame('Hello World', $service->get());
    }

    public function testCanPrintUsingTheHtmlFormatter() {
        $service = new HelloWorldService(new HtmlFormatter());

        $this->assertSame('<p>Hello World</p>', $service->get());
    }
}
