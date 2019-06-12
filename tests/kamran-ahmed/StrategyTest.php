<?php
namespace Tests\KamranAhmed;

use Patterns\Behavioral\Strategy\KamranAhmed\AscSortStrategy;
use Patterns\Behavioral\Strategy\KamranAhmed\DescSortStrategy;
use Patterns\Behavioral\Strategy\KamranAhmed\Sorter;
use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase {

	public function testStrategy() {
		$dataset = [3, 5, 8, 1, 2, 4];

		$sorter = new Sorter(new AscSortStrategy());
		$this->assertEquals(1, $sorter->sort($dataset)[0]);

		$sorter = new Sorter(new DescSortStrategy());
		$this->assertEquals(8, $sorter->sort($dataset)[0]);
	}

}
