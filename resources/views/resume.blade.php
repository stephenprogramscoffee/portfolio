@php
    $contactLinks = [
        ['href' => 'https://www.linkedin.com/in/stephensuniega/', 'label' => 'linkedin.com/in/stephensuniega', 'external' => true],
        ['href' => 'mailto:stephensuniega@gmail.com', 'label' => 'stephensuniega@gmail.com', 'external' => false],
    ];

    $contactDetails = ['+63 935 816 5282', 'Antipolo, Rizal, Philippines'];

    $coreTechnologies = ['Laravel', 'PHP', 'React.js', 'React Native', 'Expo', 'MySQL'];

    $otherTechnologies = ['JavaScript', 'SQL', 'Vue.js', 'Docker', 'Git', 'Reverb', 'WebSockets', 'Webhooks', 'REST API design', 'Claude Code', 'Cursor'];

    $experiences = [
        [
            'company' => 'Bell-Kenz Pharma, Inc.',
            'role' => 'Full Stack Developer',
            'period' => 'Apr 2024 - Present',
            'summary' => 'Develop full-stack mobile and web applications using Laravel, PHP, React Native, Expo, and MySQL to support internal business operations.',
            'highlights' => [
                'Built an AI-powered conversational reporting system on the Claude API, with automatic data capture and sensitive-data masking.',
                'Developed a gamified reporting application for physicians, applying game-like UI mechanics to improve engagement and consistency.',
                'Built a real-time chat application for internal team communication and a CRM mobile application for client relationship management.',
                'Developed a centralized data management system consolidating records across departments.',
                'Managed the end-to-end mobile development lifecycle, from architecture design through deployment and post-release support.',
                'Use agentic AI tooling (Claude Code, Cursor) to accelerate delivery, paired with code review and testing discipline.',
            ],
        ],
        [
            'company' => 'Xchanged Inc.',
            'role' => 'Software Developer',
            'period' => 'Feb 2020 - Apr 2024',
            'summary' => 'Delivered production systems for Guam-based and Singapore-based clients across remittance processing, resort management, ordering, and patient medical records.',
            'highlights' => [
                'Developed and maintained back-end and front-end applications using Laravel, PHP, React Native, and Vue.js.',
                'Designed and built REST APIs and integrated third-party APIs across web and mobile platforms.',
                'Hardened application security with gate authorization, middleware policies, and Eloquent query parameterization.',
                'Converted a React Native mobile application to native iOS using SwiftUI.',
                'Applied scalability, security, and performance improvements; performed code reviews and contributed to technology selection discussions.',
            ],
        ],
        [
            'company' => 'Philippine Commission on Women',
            'role' => 'Web Developer (Internship / OJT)',
            'period' => 'Apr 2018 - May 2018',
            'summary' => 'Developed an internal ticketing system allowing agency employees to submit and track support requests through a web interface.',
            'highlights' => [],
        ],
    ];

    $headingClasses = "text-[18px] font-semibold text-[#6ac548] [text-shadow:0_0_4px_rgba(106,197,72,0.45)]";
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head', ['title' => __('Resume').' - '.config('app.name')])
        <link href="https://fonts.bunny.net/css?family=instrument-sans:700" rel="stylesheet" />
    </head>
    <body class="min-h-dvh bg-black font-['Instrument_Sans'] text-white antialiased">
        <div class="mx-auto max-w-[1195px] px-6 pt-4 pb-[70px] lg:pr-[20px] lg:pl-[60px]">
            <header class="flex items-center justify-between gap-6">
                <a href="{{ route('home') }}" class="text-[14px] font-medium text-[#aaa] transition-colors hover:text-white">&larr; {{ __('Back') }}</a>

                <div class="flex items-center gap-6">
                    <a href="https://www.linkedin.com/in/stephensuniega/" target="_blank" rel="noopener" aria-label="LinkedIn" class="transition-opacity hover:opacity-70">
                        <img src="{{ asset('landing/linkedin.svg') }}" alt="" width="18" height="18">
                    </a>
                    <a href="{{ asset('landing/stephen-suniega-resume.pdf') }}" download="Stephen-Suniega-Resume.pdf" class="flex items-center gap-[6px] text-[14px] font-medium text-[#aaa] transition-colors hover:text-white">
                        <img src="{{ asset('landing/download.svg') }}" alt="" width="14" height="14">
                        {{ __('Download') }}
                    </a>
                </div>
            </header>

            <div class="mt-[40px] grid gap-12 lg:grid-cols-[253px_1fr] lg:gap-0">
                <aside class="order-2 space-y-[26px] lg:order-1">
                    <ul class="space-y-[5px] text-[14px]">
                        @foreach ($contactLinks as $contactLink)
                            <li>
                                <a href="{{ $contactLink['href'] }}" @if ($contactLink['external']) target="_blank" rel="noopener" @endif class="font-semibold text-[#6ac548] [text-shadow:0_0_4px_rgba(106,197,72,0.45)] hover:underline">{{ $contactLink['label'] }}</a>
                            </li>
                        @endforeach
                        @foreach ($contactDetails as $contactDetail)
                            <li class="font-medium">{{ $contactDetail }}</li>
                        @endforeach
                    </ul>

                    <section>
                        <h2 class="{{ $headingClasses }}">{{ __('Core Technologies') }}</h2>
                        <ul class="mt-[5px] list-disc space-y-[5px] pl-[21px] text-[14px] text-[#aaa] marker:text-[10px]">
                            @foreach ($coreTechnologies as $technology)
                                <li>{{ $technology }}</li>
                            @endforeach
                        </ul>
                    </section>

                    <section>
                        <h2 class="{{ $headingClasses }}">{{ __('Others') }}</h2>
                        <ul class="mt-[8px] list-disc space-y-[5px] pl-[21px] text-[14px] text-[#aaa] marker:text-[10px]">
                            @foreach ($otherTechnologies as $technology)
                                <li>{{ $technology }}</li>
                            @endforeach
                        </ul>
                    </section>
                </aside>

                <main class="order-1 lg:order-2 lg:pl-[60px]">
                    <h1 class="text-[48px] leading-[50px] font-bold">
                        Stephen
                        <span class="block">Suniega</span>
                    </h1>
                    <p class="mt-[13px] text-[24px] font-medium text-[#6ac548]">{{ __('Full Stack Developer') }}</p>
                    <p class="mt-[14px] max-w-[783px] text-[18px] font-medium text-[#aaa]">
                        Full stack developer with 6+ years building web and mobile applications end-to-end with Laravel, React Native, and React.js, including AI-powered features built on the Claude API.
                    </p>

                    <hr class="mt-[24px] border-[#aaa]/40 lg:-ml-[76px]">

                    <section class="mt-[35px]">
                        <h2 class="{{ $headingClasses }}">{{ __('Experiences') }}</h2>

                        <ol class="mt-[22px] space-y-[28px]">
                            @foreach ($experiences as $experience)
                                <li>
                                    <div class="flex flex-wrap items-baseline justify-between gap-x-6 gap-y-1">
                                        <h3 class="flex flex-col text-[16px]">
                                            <span class="font-semibold text-[20px]">{{ $experience['role'] }}</span>
                                            <span class="font-medium text-[#aaa]">{{ $experience['company'] }}</span>
                                        </h3>
                                        <p class="text-[16px] font-medium text-[#aaa]">{{ $experience['period'] }}</p>
                                    </div>

                                    <p class="mt-[16px] max-w-[641px] text-[15px] font-medium text-[#aaa]">{{ $experience['summary'] }}</p>

                                    @if ($experience['highlights'])
                                        <ul class="mt-[18px] max-w-[641px] list-disc space-y-[11px] pl-[13px] text-[15px] font-medium text-[#aaa] marker:text-[10px]">
                                            @foreach ($experience['highlights'] as $highlight)
                                                <li class="pl-[4px]">{{ $highlight }}</li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ol>
                    </section>

                    <section class="mt-[54px]">
                        <h2 class="{{ $headingClasses }}">{{ __('Education') }}</h2>

                        <div class="mt-[22px] flex flex-wrap items-baseline justify-between gap-x-6 gap-y-1">
                            <h3 class="text-[16px]">
                                <span class="font-semibold">Bachelor of Science in Computer Science</span>
                                <span class="ml-1 font-medium text-[#aaa]">&mdash; STI College</span>
                            </h3>
                            <p class="text-[16px] font-medium text-[#aaa]">Graduated 2019</p>
                        </div>
                    </section>
                </main>
            </div>
        </div>
    </body>
</html>
