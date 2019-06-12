<?php
namespace Tests\KamranAhmed;

use Patterns\Behavioral\TemplateMethod\KamranAhmed\AndroidBuilder;
use Patterns\Behavioral\TemplateMethod\KamranAhmed\IosBuilder;
use PHPUnit\Framework\TestCase;

class TemplateMethodTest extends TestCase {

	public function testTemplateMethod() {
		$androidBuilder = new AndroidBuilder();
		$this->assertSame([
			'Running android tests', 'Linting the android code', 'Assembling the android build', 'Deploying android build to server'
		], $androidBuilder->build());

		$iosBuilder = new IosBuilder();
		$this->assertSame([
			'Running ios tests', 'Linting the ios code', 'Assembling the ios build', 'Deploying ios build to server'
		], $iosBuilder->build());
	}
}
