<?php

namespace Tests\Unit;

use App\User;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $user = new User(['name' => 'Taylor Otwell']);

        $this->assertEquals('Taylor Otwell', $user->name);
    }
}
