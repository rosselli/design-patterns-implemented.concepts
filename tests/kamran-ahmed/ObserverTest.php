<?php
namespace Tests\KamranAhmed;

use Patterns\Behavioral\Observer\KamranAhmed\EmploymentAgency;
use Patterns\Behavioral\Observer\KamranAhmed\JobPost;
use Patterns\Behavioral\Observer\KamranAhmed\JobSeeker;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase {

	public function testObserver() {
		$johnDoe = new JobSeeker('John Doe');
		$janeDoe = new JobSeeker('Jane Doe');

		$jobPostings = new EmploymentAgency();
		$jobPostings->attach($johnDoe);
		$jobPostings->attach($janeDoe);

		$notification = $jobPostings->addJob(new JobPost('Software Engineer'));

		$this->assertSame('Hi Jane Doe! New job posted: Software Engineer', $notification[1]);
	}

}
