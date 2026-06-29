<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function test_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('Crafting thoughtful digital experiences.');
        $response->assertSee('white-crumpled-paper-texture-background-design-space-white-tone.jpg', false);
    }
}
