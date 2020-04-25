<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * Added basic faker.
     *
     * @return void
     */
    public function testFaker()
    {
        $x = factory(\App\Message::class)->make();

        $this->assertNotNull($x);
    }
}
