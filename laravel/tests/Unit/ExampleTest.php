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
        factory(Book::class, 100)->create();
        $this->assertCount(100, Book::all());
    }
}
