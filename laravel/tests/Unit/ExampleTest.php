<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        for ($i = 0; $i < 100; $i++) {
            $book = new Book();
            $book->name = 'hoge';
            $saveBook = $book->save();
        }
        $this->assertCount(100, Book::all());
    }
}
