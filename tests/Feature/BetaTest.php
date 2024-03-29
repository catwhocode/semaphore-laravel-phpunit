<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
// use Illuminate\Foundation\Testing\WithFaker;

use Tests\TestCase;

class BetaTest extends TestCase
{
    
    public function test_example()
    {
        $response = $this->get('/beta');

        $response->assertStatus(200);
        $response->assertSee('Beta');
        $response->assertDontSee('Alpha');
    }

}
