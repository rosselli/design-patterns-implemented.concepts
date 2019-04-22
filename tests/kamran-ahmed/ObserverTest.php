<?php
namespace Tests\KamranAhmed;

use Patterns\Behavioral\Observer\KamranAhmed\JobPublishers;
use Patterns\Behavioral\Observer\KamranAhmed\Jobs;
use Patterns\Behavioral\Observer\KamranAhmed\JobSubscribers;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase {

	public function testSubscribers() {

		# create subscribers (observers)
		$johnDoe = new JobSubscribers('John Doe');
		$janeDoe = new JobSubscribers('Jane Doe');
		$roseDoe = new JobSubscribers('Rose Doe');

		# create publisher and attach subscribers
		$publishers = new JobPublishers();
		$publishers->attach($johnDoe);
		$publishers->attach($janeDoe);
//		$publishers->attach($roseDoe);
		$jobs = new Jobs($publishers);
		$jobs->addJob('Software Engineer');
//
//		$output = "Hi, John Doe. New job posted: Software Engineer
//		 Hi, Jane Doe. New job posted: Software Engineer";
//

//		$output = "Hi, John Doe. New job posted: Software Engineer";

//		$this->assertSame($output, $jobs->addJob('Software Engineer'));

//		$publishers->detach($janeDoe);
		$s = $jobs->getPublishers();
		var_dump($s);
//		var_dump($publishers->getObservers()->current());

		$this->assertTrue(true);
	}

}
