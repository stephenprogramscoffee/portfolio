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
        $response->assertSee('FULL STACK');
        $response->assertSee('DEVELOPER');
        $response->assertSee('Passionate about crafting scalable web and mobile systems from the ground up');
        $response->assertSee('Years of experience');
        $response->assertSee('geologica:400,500,600,700', false);
    }

    public function test_navigation_links_to_each_section(): void
    {
        $response = $this->get('/');

        $response->assertSeeInOrder(['href="#about"', 'href="#experience"', 'href="#tech-stack"'], false);
        $response->assertSee('id="about"', false);
        $response->assertSee('id="experience"', false);
        $response->assertSee('id="tech-stack"', false);
        $response->assertSee('landing/user.svg', false);
        $response->assertSee('landing/briefcase.svg', false);
        $response->assertSee('landing/tool.svg', false);
    }

    public function test_sections_after_intro_fade_while_intro_stays_visible(): void
    {
        $response = $this->get('/');

        $response->assertSee("document.documentElement.classList.add('fade-sections-ready');", false);
        $response->assertSee('<section id="experience" class="mt-[140px] scroll-mt-28" data-fade-section>', false);
        $response->assertSee('<section id="tech-stack" class="mt-[140px] scroll-mt-28" data-fade-section>', false);
        $this->assertDoesNotMatchRegularExpression('/<section id="about"[^>]*data-fade-section/', $response->getContent());
    }

    public function test_intro_shows_photo_logo_and_social_links(): void
    {
        $response = $this->get('/');

        $response->assertSee('intro-imgs/my-photo.png', false);
        $response->assertSee('intro-imgs/stephen_logo.png', false);
        $response->assertSee('https://www.linkedin.com/in/stephensuniega/', false);
        $response->assertSee('https://github.com/stephenprogramscoffee', false);
        $response->assertSee('mailto:hello@snephets.dev', false);
        $response->assertDontSee('images/stephen_logo.png', false);
    }

    public function test_work_experience_lists_roles_in_order(): void
    {
        $response = $this->get('/');

        $response->assertSee('WORK EXPERIENCE');
        $response->assertSee('Download CV');
        $response->assertSee('href="'.asset('landing/stephen-suniega-resume.pdf').'" download="Stephen-Suniega-Resume.pdf"', false);
        $response->assertSeeInOrder(['href="'.route('resume').'"', 'View Resume', 'Download CV'], false);
        $response->assertSee('landing/file-text.svg', false);
        $response->assertSeeInOrder([
            'Bell-Kenz Pharma, Inc.',
            'Apr 2024 - Present',
            'Xchanged Inc.',
            'Feb 2020 - Apr 2024',
        ]);
        $response->assertSee('landing/timeline-line-1.svg', false);
        $response->assertSee('landing/timeline-line-2.svg', false);
    }

    public function test_tech_stack_lists_every_tool_in_grid_order(): void
    {
        $response = $this->get('/');

        $response->assertSeeInOrder([
            'Claude Code', 'React.js', 'Docker',
            'Laravel', 'React Native', 'Github',
            'MySQL', 'Expo', 'Figma',
        ]);
        $response->assertSee('Application Containerization');
        $response->assertSee('landing/tech-claude-code.svg', false);
        $response->assertSee('landing/tech-figma.svg', false);
    }

    public function test_every_referenced_landing_asset_exists(): void
    {
        $html = $this->get('/')->getContent();

        preg_match_all('#/(landing|intro-imgs)/([\w.-]+\.(?:svg|png|pdf))#', $html, $matches, PREG_SET_ORDER);

        $this->assertNotEmpty($matches);

        foreach ($matches as $match) {
            $path = public_path($match[1].'/'.$match[2]);

            $this->assertFileExists($path);
            $this->assertGreaterThan(0, filesize($path));
        }

        $this->assertStringNotContainsString('figma.com/api/mcp/asset', $html);
    }
}
