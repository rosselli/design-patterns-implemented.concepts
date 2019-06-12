<?php
namespace Tests\Domnikl;

use Patterns\Behavioral\ChainOfResponsibilities\Domnikl\Responsible\HttpInMemoryCacheHandler;
use Patterns\Behavioral\ChainOfResponsibilities\Domnikl\Responsible\SlowDatabaseHandler;
use PHPUnit\Framework\TestCase;

class ChainOfResponsibilitiesTest extends TestCase {
    private $chain;

	protected function setUp(): void {
        $this->chain = new HttpInMemoryCacheHandler(
        	['/foo/bar?index=1' => 'Hello In Memory!'],
			new SlowDatabaseHandler()
        );
    }

    public function testCanRequestKeyInFastStorage() {
        $uri = $this->createMock('Psr\Http\Message\UriInterface');
        $uri->method('getPath')->willReturn('/foo/bar');
        $uri->method('getQuery')->willReturn('index=1');

        $request = $this->createMock('Psr\Http\Message\RequestInterface');
        $request->method('getMethod')->willReturn('GET');
        $request->method('getUri')->willReturn($uri);

        $this->assertSame('Hello In Memory!', $this->chain->handle($request));
    }

    public function testCanRequestKeyInSlowStorage(){
        $uri = $this->createMock('Psr\Http\Message\UriInterface');
        $uri->method('getPath')->willReturn('/foo/baz');
        $uri->method('getQuery')->willReturn('');

        $request = $this->createMock('Psr\Http\Message\RequestInterface');
        $request->method('getMethod')->willReturn('GET');
        $request->method('getUri')->willReturn($uri);

        $this->assertSame('Hello World!', $this->chain->handle($request));
    }
}
