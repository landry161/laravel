<?php

namespace Tests\Integration;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

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
        factory(User::class)->times(3)->create();

        $this->assertCount(3, User::all());
    }
}
