<?php
namespace Patterns\Behavioral\Iterator\KamranAhmed;

use Countable;
use Iterator;

class StationList implements Countable, Iterator {
	private $stations = [];
	private $counter;

	public function addStation(RadioStation $station): void {
		$this->stations[] = $station;
	}

	public function removeStation(RadioStation $toRemove): void {
		$toRemoveFrequency = $toRemove->getFrequency();
		$this->stations = array_filter($this->stations, function (RadioStation $station) use ($toRemoveFrequency) {
			return $station->getFrequency() !== $toRemoveFrequency;
		});
		$this->stations = array_values($this->stations);
	}

	public function count(): int {
		return count($this->stations);
	}

	public function current(): RadioStation {
		return $this->stations[$this->counter];
	}

	public function key(): int {
		return $this->counter;
	}

	public function next(): void {
		$this->counter++;
	}

	public function rewind(): void {
		$this->counter = 0;
	}

	public function valid(): bool {
		return isset($this->stations[$this->counter]);
	}

	public function getStations(): array {
		return $this->stations;
	}

	public function getCounter(): int {
		return $this->counter;
	}
}
