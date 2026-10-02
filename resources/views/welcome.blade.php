<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head', ['title' => config('app.name')])
        <link href="https://fonts.bunny.net/css?family=instrument-sans:500,600,700|karla:500|crimson-text:400|architects-daughter:400" rel="stylesheet" />
    </head>
    <body class="flex min-h-dvh flex-col bg-[#e0e0e0] font-sans antialiased">
        <section class="relative flex min-h-[720px] flex-1 flex-col bg-white">
            <header class="shrink-0 flex items-start justify-between px-6 pt-10 sm:px-14 sm:pt-14 lg:pr-[68px] lg:pl-[57px]">
                <a href="{{ route('home') }}" class="font-['Architects_Daughter'] text-[30px] leading-9 text-[#1bf84c]">
                    STEPHEN
                </a>

                <button type="button" class="mt-1 cursor-pointer" aria-label="{{ __('Open menu') }}">
                    <img src="{{ asset('images/sidemenu-toggle.svg') }}" alt="" width="37.3037" height="15.5">
                </button>
            </header>

            <main class="flex flex-1 items-center justify-center px-6 py-12 lg:px-0">
                <div class="w-full max-w-[943px] font-['Crimson_Text'] text-black">
                    <p class="text-xl text-[#4d463b]">Haloo, I’m Stephen</p>

                    <h1 class="mt-3.5 text-2xl font-normal leading-tight sm:text-[32px] sm:leading-9">
                        A Full Stack Developer
                        <span class="block text-[#1bf84c]">crafting scalable web and mobile systems from the ground up.</span>
                    </h1>

                    <div class="mt-6 text-lg sm:pl-[5px] sm:text-xl">
                        <p class="max-w-[938px] text-justify">
                            I have 6+ years building full-stack applications across Laravel, React Native, and React.js — from database design and RESTful API architecture to security implementation and performant, user-facing interfaces.
                        </p>
                        <p class="mt-[22px] max-w-[938px] text-justify">
                            In my current role, I've been the developer consistently entrusted with new mobile initiatives — building a CRM application, an internal messaging platform, an AI-powered reporting system, and a data management system, each from the ground up. Across these projects I own the full lifecycle: architecture, development, and post-release support.
                        </p>
                        <p class="mt-[35px] max-w-[938px] text-justify">
                            Before my current role, I spent four years as a developer at Xchanged Inc., building and scaling production systems across finance, logistics, and healthcare — platforms that handled real money, real patient data, and multi-tenant architectures serving clients in Guam and Singapore.
                        </p>
                        <p class="mt-[35px] max-w-[795px]">
                            If you have questions or proposal, feel free to <a href="#contact" class="text-[#1bf84c] hover:underline">contact me</a>.
                        </p>
                    </div>
                </div>
            </main>
        </section>

        <footer id="contact" class="shrink-0 mt-0.5 min-h-[371px] bg-[rgba(77,70,59,0.49)] px-6 pt-[87px] pb-16 lg:px-0">
            <div class="mx-auto max-w-[1000px]">
                <div class="grid gap-8 sm:grid-cols-[477px_1fr]">
                    <div>
                        <h2 class="font-['Karla'] text-2xl font-medium text-[#fffeed]">Contacts</h2>
                        <ul class="mt-2 space-y-2 text-xl font-semibold text-[#adffbf]">
                            <li><a href="https://t.me/snehpets" class="hover:underline">t.me/snehpets</a></li>
                            <li><a href="mailto:hello@snephets.dev" class="hover:underline">hello@snephets.dev</a></li>
                        </ul>
                    </div>

                    <ul class="space-y-2 text-xl font-semibold text-[#adffbf] sm:pt-[41px]">
                        <li><a href="#" class="hover:underline">My Craft</a></li>
                        <li><a href="#" class="hover:underline">My Experience</a></li>
                    </ul>
                </div>

                <img src="{{ asset('images/line.svg') }}" alt="" width="1000" height="2" class="mt-[26px] w-full">

                <div class="mt-3 flex justify-end gap-[13px]">
                    <a href="https://github.com/stephenprogramscoffee" target="_blank" aria-label="GitHub">
                        <img src="{{ asset('images/github.svg') }}" alt="" width="50" height="50">
                    </a>
                    <a href="https://www.linkedin.com/in/stephensuniega/" target="_blank" aria-label="LinkedIn">
                        <img src="{{ asset('images/linkedin.svg') }}" alt="" width="50" height="50">
                    </a>
                </div>
            </div>
        </footer>
    </body>
</html>
