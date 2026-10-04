<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ResumePageTest extends TestCase
{
    use RefreshDatabase;

    public function test_resume_page_renders_header_and_contacts(): void
    {
        $response = $this->get(route('resume'));

        $response->assertOk();
        $response->assertSeeInOrder(['Stephen', 'Suniega', 'Full Stack Developer']);
        $response->assertSee('mailto:stephensuniega@gmail.com', false);
        $response->assertSee('https://www.linkedin.com/in/stephensuniega/', false);
        $response->assertSee('+63 935 816 5282');
        $response->assertSee('Antipolo, Rizal, Philippines');
    }

    public function test_resume_page_links_back_home_and_to_pdf_download(): void
    {
        $response = $this->get(route('resume'));

        $response->assertSee('href="'.route('home').'"', false);
        $response->assertSee('href="'.asset('landing/stephen-suniega-resume.pdf').'" download="Stephen-Suniega-Resume.pdf"', false);
    }

    public function test_resume_page_lists_skills(): void
    {
        $response = $this->get(route('resume'));

        $response->assertSeeInOrder(['Core Technologies', 'Laravel', 'PHP', 'React.js', 'React Native', 'Expo', 'MySQL']);
        $response->assertSeeInOrder(['Others', 'JavaScript', 'SQL', 'Vue.js', 'Docker', 'Git', 'Reverb', 'WebSockets', 'Webhooks', 'REST API design', 'Claude Code', 'Cursor']);
    }

    public function test_resume_page_lists_experiences_and_education_in_order(): void
    {
        $response = $this->get(route('resume'));

        $response->assertSeeInOrder([
            'Experiences',
            'Bell-Kenz Pharma, Inc.', 'Mid-Level Full Stack Developer', 'Apr 2024 - Present',
            'Built an AI-powered conversational reporting system on the Claude API',
            'Xchanged Inc.', 'Software Developer', 'Feb 2020 - Apr 2024',
            'Converted a React Native mobile application to native iOS using SwiftUI.',
            'Philippine Commission on Women', 'Web Developer (Internship / OJT)', 'Apr 2018 - May 2018',
            'Education',
            'Bachelor of Science in Computer Science', 'STI College', 'Graduated 2019',
        ]);
    }

    public function test_resume_page_does_not_expose_references(): void
    {
        $response = $this->get(route('resume'));

        $response->assertDontSee('Gabriel Huerte');
        $response->assertDontSee('Nathaniel Bambico');
    }

    public function test_every_referenced_landing_asset_exists(): void
    {
        $html = $this->get(route('resume'))->getContent();

        preg_match_all('#/landing/([\w.-]+\.(?:svg|png|pdf))#', $html, $matches, PREG_SET_ORDER);

        $this->assertNotEmpty($matches);

        foreach ($matches as $match) {
            $this->assertFileExists(public_path('landing/'.$match[1]));
        }
    }
}
