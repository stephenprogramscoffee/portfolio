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
        $response->assertSee('Haloo, I’m Stephen');
        $response->assertSee('crafting scalable web and mobile systems from the ground up.');
        $response->assertSee('Xchanged Inc.');
        $response->assertSee('crimson-text:400', false);
        $response->assertSee('mailto:hello@snephets.dev', false);
        $response->assertSee('images/github.svg', false);
        $response->assertSee('images/linkedin.svg', false);
        $response->assertDontSee('white-crumpled-paper-texture-background-design-space-white-tone.jpg', false);
        $response->assertSee('<section class="relative flex min-h-[720px] flex-1 flex-col bg-white">', false);
    }

    public function test_layout_makes_body_a_full_height_flex_column(): void
    {
        $this->get('/')->assertSee('<body class="flex min-h-dvh flex-col', false);
    }

    public function test_hero_section_grows_to_fill_space_above_footer(): void
    {
        $response = $this->get('/');

        $response->assertSee('relative flex min-h-[720px] flex-1 flex-col', false);
        $response->assertSeeInOrder(['</section>', '<footer id="contact"'], false);
    }

    public function test_hero_text_is_vertically_centered_in_main(): void
    {
        $response = $this->get('/');

        $response->assertSee('<main class="flex flex-1 items-center justify-center', false);
        $response->assertSee('<div class="w-full max-w-[943px] font-[\'Crimson_Text\'] text-black">', false);
        $response->assertDontSee('lg:pt-[121px]', false);
        $response->assertSee('<p class="max-w-[938px] text-justify">', false);
        $response->assertSee('<p class="mt-[35px] max-w-[795px]">', false);
    }

    public function test_footer_is_pinned_and_keeps_its_height(): void
    {
        $response = $this->get('/');

        $response->assertSee('<footer id="contact" class="shrink-0', false);
        $response->assertSee('min-h-[371px]', false);
    }

    public function test_header_logo_uses_architects_daughter_font(): void
    {
        $response = $this->get('/');

        $response->assertSee('architects-daughter:400', false);
        $response->assertSee("font-['Architects_Daughter'] text-[30px] leading-9", false);
        $response->assertDontSee('Rubik_Mono_One', false);
        $response->assertDontSee('rubik-mono-one', false);
    }
}
