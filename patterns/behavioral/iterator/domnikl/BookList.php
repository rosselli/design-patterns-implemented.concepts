<?php
namespace Patterns\Behavioral\Iterator\Domnikl;

class BookList implements \Countable, \Iterator {
    private $books = [];
    private $currentIndex = 0;

    public function addBook(Book $book): void {
        $this->books[] = $book;
    }

    public function removeBook(Book $bookToRemove): void {
        foreach ($this->books as $key => $book) {
            if ($book->getAuthorAndTitle() === $bookToRemove->getAuthorAndTitle()) {
                unset($this->books[$key]);
            }
        }
        $this->books = array_values($this->books);
    }

    public function count(): int {
        return count($this->books);
    }

    public function current(): Book {
        return $this->books[$this->currentIndex];
    }

    public function key(): int {
        return $this->currentIndex;
    }

    public function next(): void {
        $this->currentIndex++;
    }

    public function rewind(): void {
        $this->currentIndex = 0;
    }

    public function valid(): bool {
        return isset($this->books[$this->currentIndex]);
    }
}
