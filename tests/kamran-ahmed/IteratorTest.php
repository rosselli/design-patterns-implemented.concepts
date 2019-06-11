<?php
namespace Tests\KamranAhmed;

use Patterns\Behavioral\Iterator\KamranAhmed\RadioStation;
use Patterns\Behavioral\Iterator\KamranAhmed\StationList;
use PHPUnit\Framework\TestCase;

class IteratorTest extends TestCase {
	public function testIterator() {
		$stations;
		$stationList = new StationList();

		$stationList->addStation(new RadioStation(89));
		$stationList->addStation(new RadioStation(101));
		$stationList->addStation(new RadioStation(102));
		$stationList->addStation(new RadioStation(103.2));

		foreach($stationList as $station) {
			$stations[] = $station->getFrequency();
		}

		$this->assertEquals(89, $stations[0]);
		$this->assertCount(4, $stations);
		$stationList->removeStation(new RadioStation(89));

		unset($stations);
		$stations;

		foreach($stationList as $station) {
			$stations[] = $station->getFrequency();
		}

		$this->assertEquals(101, $stations[0]);
		$this->assertCount(3, $stations);
	}
}
