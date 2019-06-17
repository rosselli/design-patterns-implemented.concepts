<?php
namespace Tests\Domnikl;

use Patterns\Creational\Adapter\Domnikl\Book;
use Patterns\Creational\Adapter\Domnikl\EBookAdapter;
use Patterns\Creational\Adapter\Domnikl\Kindle;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase {
    public function testCanTurnPageOnBook() {
        $book = new Book();
        $book->open();
        $this->assertSame(1, $book->getPage());

        $book->turnPage();
        $this->assertSame(2, $book->getPage());
    }

    public function testCanTurnPageOnKindleLikeInANormalBook() {
        $kindle = new Kindle();
        $book = new EBookAdapter($kindle);

        $book->open();
        $this->assertSame(1, $book->getPage());
        $book->turnPage();
        $this->assertSame(2, $book->getPage());
    }
}
