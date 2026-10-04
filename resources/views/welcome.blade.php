@php
    $navigationLinks = [
        ['href' => '#about', 'label' => __('About'), 'icon' => 'landing/user.svg'],
        ['href' => '#experience', 'label' => __('Work experience'), 'icon' => 'landing/briefcase.svg'],
        ['href' => '#tech-stack', 'label' => __('Tech stack'), 'icon' => 'landing/tool.svg'],
    ];

    $socialLinks = [
        ['href' => 'https://www.linkedin.com/in/stephensuniega/', 'label' => 'LinkedIn', 'icon' => 'landing/linkedin.svg', 'external' => true],
        ['href' => 'https://github.com/stephenprogramscoffee', 'label' => 'GitHub', 'icon' => 'landing/github.svg', 'external' => true],
        ['href' => 'mailto:hello@snephets.dev', 'label' => __('Email'), 'icon' => 'landing/mail.svg', 'external' => false],
    ];

    $experiences = [
        [
            'company' => 'Bell-Kenz Pharma, Inc.',
            'summary' => 'Build internal mobile and web applications end-to-end with Laravel and React Native, including an AI-powered conversational reporting system and a gamified reporting app for physicians.',
            'period' => 'Apr 2024 - Present',
            'line' => ['src' => 'landing/timeline-line-1.svg', 'width' => 147.746, 'height' => 9.98294, 'boxHeight' => 139.76],
        ],
        [
            'company' => 'Xchanged Inc.',
            'summary' => 'Delivered production systems for clients in Guam and Singapore across remittance, resort management, ordering, and medical records, using Laravel, React Native, and Vue.js.',
            'period' => 'Feb 2020 - Apr 2024',
            'line' => ['src' => 'landing/timeline-line-2.svg', 'width' => 144.734, 'height' => 9.98294, 'boxHeight' => 136.748],
        ],
    ];

    $techStack = [
        ['name' => 'Claude Code', 'role' => 'Agentic Programming', 'icon' => 'landing/tech-claude-code.svg', 'width' => 50, 'height' => 50],
        ['name' => 'React.js', 'role' => 'Front-end Development', 'icon' => 'landing/tech-reactjs.svg', 'width' => 39.125, 'height' => 34.9375, 'caption' => 'ReactJS', 'captionSize' => 'text-[12px]'],
        ['name' => 'Docker', 'role' => 'Application Containerization', 'icon' => 'landing/tech-docker.svg', 'width' => 50, 'height' => 50],
        ['name' => 'Laravel', 'role' => 'Back-end Development', 'icon' => 'landing/tech-laravel.svg', 'width' => 50, 'height' => 50],
        ['name' => 'React Native', 'role' => 'Mobile Development', 'icon' => 'landing/tech-react-native.svg', 'width' => 39.125, 'height' => 34.9375, 'caption' => 'React Native', 'captionSize' => 'text-[9px]'],
        ['name' => 'Github', 'role' => 'App Version Control', 'icon' => 'landing/tech-github.svg', 'width' => 51, 'height' => 50],
        ['name' => 'MySQL', 'role' => 'Database Management', 'icon' => 'landing/tech-mysql.svg', 'width' => 50, 'height' => 50],
        ['name' => 'Expo', 'role' => 'App Builder', 'icon' => 'landing/tech-expo.svg', 'width' => 50, 'height' => 50],
        ['name' => 'Figma', 'role' => 'Design Prototyping', 'icon' => 'landing/tech-figma.svg', 'width' => 50, 'height' => 50],
    ];
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head', ['title' => config('app.name')])
        <script>
            if ('IntersectionObserver' in window) {
                document.documentElement.classList.add('fade-sections-ready');
            }
        </script>
        <link href="https://fonts.bunny.net/css?family=geologica:400,500,600,700|instrument-sans:600" rel="stylesheet" />
    </head>
    <body class="min-h-dvh bg-black font-['Geologica'] text-white antialiased">
        <nav class="sticky top-0 z-10 flex justify-center pt-10" aria-label="{{ __('Sections') }}">
            <div class="flex h-[46px] w-[196px] items-center gap-[28px] rounded-[13px] border border-black bg-[#1e1e1e] pl-[31px]">
                @foreach ($navigationLinks as $navigationLink)
                    <a href="{{ $navigationLink['href'] }}" aria-label="{{ $navigationLink['label'] }}" class="transition-opacity hover:opacity-70">
                        <img src="{{ asset($navigationLink['icon']) }}" alt="" width="26" height="26">
                    </a>
                @endforeach
            </div>
        </nav>

        <main class="mx-auto max-w-[940px] px-6 pb-[123px] lg:px-0">
            <section id="about" class="mt-[50px] flex scroll-mt-28 flex-col items-center gap-10 sm:flex-row sm:items-stretch sm:gap-[93px]">
                <div class="flex shrink-0 flex-col items-center">
                    <div class="relative h-[472px] w-[315px] overflow-hidden rounded-[29px]">
                        <img src="{{ asset('intro-imgs/my-photo.png') }}" alt="Stephen" class="size-full object-cover">
                        <img src="{{ asset('intro-imgs/stephen_logo.png') }}" alt="STEPHEN" class="absolute top-[21px] left-[22px] h-[56px] w-[271px] object-cover">
                    </div>

                    <ul class="mt-[21px] flex gap-[18px]">
                        @foreach ($socialLinks as $socialLink)
                            <li>
                                <a href="{{ $socialLink['href'] }}" aria-label="{{ $socialLink['label'] }}" @if ($socialLink['external']) target="_blank" rel="noopener" @endif class="block transition-opacity hover:opacity-70">
                                    <img src="{{ asset($socialLink['icon']) }}" alt="" width="24" height="24">
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="flex w-full max-w-[434px] flex-col justify-between gap-10 sm:h-[478px]">
                    <div>
                        <h1 class="text-[40px] leading-[41px] font-bold sm:text-[48px] sm:leading-[49px]">
                            FULL STACK
                            <span class="block text-[#6ac548]">DEVELOPER</span>
                        </h1>

                        <p class="mt-[9px] sm:text-justify text-[17px] font-semibold text-[#aaa]">
                            Passionate about crafting scalable web and mobile systems from the ground up, transforming ideas into reliable, user-focused solutions.
                        </p>
                    </div>

                    <div>
                        <p class="font-['Instrument_Sans'] text-[64px] font-semibold text-white">+6</p>
                        <p class="w-[111px] text-[20px] text-[#aaa]">Years of experience</p>
                    </div>
                </div>
            </section>

            <section id="experience" class="mt-[140px] scroll-mt-28" data-fade-section>
                <div class="flex flex-wrap items-start justify-between gap-4">
                    <h2 class="text-[32px] leading-[33px] font-bold sm:text-[40px] sm:leading-[39px]">
                        6 YEARS OF
                        <span class="block text-[#6ac548]">WORK EXPERIENCE</span>
                    </h2>

                    <div class="mt-[19px] flex flex-wrap items-center gap-x-8">
                        <a href="{{ route('resume') }}" class="flex items-center gap-3 text-[16px] leading-[39px] font-medium text-[#aaa] transition-colors hover:text-white">
                            <img src="{{ asset('landing/file-text.svg') }}" alt="" width="24" height="24">
                            View Resume
                        </a>

                        <a href="{{ asset('landing/stephen-suniega-resume.pdf') }}" download="Stephen-Suniega-Resume.pdf" class="flex items-center gap-3 text-[16px] leading-[39px] font-medium text-[#aaa] transition-colors hover:text-white">
                            <img src="{{ asset('landing/download.svg') }}" alt="" width="24" height="24">
                            Download CV
                        </a>
                    </div>
                </div>

                <ol class="mt-[22px] space-y-[22px]">
                    @foreach ($experiences as $experience)
                        <li class="relative pl-[29px]">
                            <div class="absolute top-[15px] left-[2px] flex w-[3.8px] items-center justify-center" style="height: {{ $experience['line']['boxHeight'] }}px" aria-hidden="true">
                                <div class="flex-none rotate-[90.75deg]">
                                    <img src="{{ asset($experience['line']['src']) }}" alt="" width="{{ $experience['line']['width'] }}" height="{{ $experience['line']['height'] }}" class="max-w-none">
                                </div>
                            </div>

                            <h3 class="text-[24px] leading-[39px] font-bold">{{ $experience['company'] }}</h3>
                            <p class="mt-1 max-w-[681px] sm:text-justify text-[16px] leading-[28px] font-bold text-[#aaa]">{{ $experience['summary'] }}</p>
                            <p class="mt-[11px] text-[16px] leading-[28px] font-semibold text-[#6ac548]">{{ $experience['period'] }}</p>
                        </li>
                    @endforeach
                </ol>
            </section>

            <section id="tech-stack" class="mt-[140px] scroll-mt-28" data-fade-section>
                <h2 class="text-[32px] leading-[33px] font-bold sm:text-[40px] sm:leading-[39px]">
                    TECH
                    <span class="block text-[#6ac548]">STACK</span>
                </h2>

                <ul class="mt-[25px] grid gap-x-4 gap-y-9 sm:grid-cols-2 lg:grid-cols-[332px_332px_1fr] lg:gap-x-0">
                    @foreach ($techStack as $tech)
                        <li class="flex items-start gap-[15px]">
                            <div class="relative flex size-[65px] shrink-0 justify-center rounded-[14px] bg-white @isset($tech['caption']) pt-[8px] @else items-center @endisset">
                                @isset($tech['caption'])
                                    <div class="flex size-[40px] items-center justify-center">
                                        <img src="{{ asset($tech['icon']) }}" alt="" width="{{ $tech['width'] }}" height="{{ $tech['height'] }}">
                                    </div>
                                    <span class="absolute inset-x-0 top-[33px] text-center {{ $tech['captionSize'] }} leading-[39px] font-semibold text-[#61dafb]" aria-hidden="true">{{ $tech['caption'] }}</span>
                                @else
                                    <img src="{{ asset($tech['icon']) }}" alt="" width="{{ $tech['width'] }}" height="{{ $tech['height'] }}">
                                @endisset
                            </div>

                            <div class="pt-[11px]">
                                <p class="text-[16px] leading-[20px] font-semibold">{{ $tech['name'] }}</p>
                                <p class="mt-[3px] text-[14px] leading-[20px] text-[#aaa]">{{ $tech['role'] }}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </section>
        </main>
    </body>
</html>
