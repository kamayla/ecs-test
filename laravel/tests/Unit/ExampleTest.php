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
        dd(env('DB_DATABASE'), env('DB_USERNAME'), env('DB_PASSWORD'));
        $book = new Book();
        $book->name = 'hoge';
        $saveBook = $book->save();
        $this->assertTrue($saveBook);
    }
}
