<?php
namespace Patterns\Behavioral\TemplateMethod\Domnikl;

abstract class Journey {
    private $thingsToDo = [];

    /**
     * This is the public service provided by this class and its subclasses.
     * Notice it is final to "freeze" the global behavior of algorithm.
     * If you want to override this contract, make an interface with only takeATrip() and subclass it.
     */
    final public function takeATrip(): void {
        $this->thingsToDo[] = $this->buyAFlight();
        $this->thingsToDo[] = $this->takePlane();
        $this->thingsToDo[] = $this->enjoyVacation();

        $buyGift = $this->buyGift();
        if ($buyGift !== 0) {
            $this->thingsToDo[] = $buyGift;
        }

        $this->thingsToDo[] = $this->takePlane();
    }

    # This method must be implemented, this is the key-feature of this pattern.
    abstract protected function enjoyVacation(): string;

    # This method is also part of the algorithm but it is optional. You can override it only if you need to
    protected function buyGift(){
		return 0;
    }

    private function buyAFlight(): string {
        return 'Buy a flight ticket';
    }

    private function takePlane(): string {
        return 'Taking the plane';
    }

    public function getThingsToDo(): array {
        return $this->thingsToDo;
    }
}
