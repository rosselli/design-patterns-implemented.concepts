<?php
namespace Tests\KamranAhmed;

use Patterns\Structural\Bridge\KamranAhmed\About;
use Patterns\Structural\Bridge\KamranAhmed\AquaTheme;
use Patterns\Structural\Bridge\KamranAhmed\Careers;
use Patterns\Structural\Bridge\KamranAhmed\DarkTheme;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase {

	public function testBridge() {
		$darkTheme = new DarkTheme();
		$about = new About($darkTheme);
		$careers = new Careers($darkTheme);

		$this->assertSame('About page in Dark Black', $about->getContent());
		$this->assertSame('Careers page in Dark Black', $careers->getContent());

		$lightTheme = new AquaTheme();
		$about = new About($lightTheme);
		$careers = new Careers($lightTheme);

		$this->assertSame('About page in Light blue', $about->getContent());
		$this->assertSame('Careers page in Light blue', $careers->getContent());
	}
}
