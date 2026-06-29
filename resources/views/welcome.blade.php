<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head', ['title' => config('app.name')])
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=playfair-display:400,500,600|instrument-sans:400,500,600" rel="stylesheet" />
    </head>
    <body class="min-h-dvh antialiased text-neutral-800">
        <div
            class="paper-background fixed inset-0 -z-10 bg-cover bg-center bg-no-repeat"
            style="background-image: url('{{ asset('images/white-crumpled-paper-texture-background-design-space-white-tone.jpg') }}');"
            aria-hidden="true"
        ></div>

        <div class="relative flex min-h-dvh flex-col">
            <header class="mx-auto flex w-full max-w-5xl items-center justify-between px-6 py-8 lg:px-10">
                <a href="{{ route('home') }}" class="font-serif text-lg font-medium tracking-tight text-neutral-900">
                    {{ config('app.name') }}
                </a>

                <nav class="flex items-center gap-6 text-sm font-medium text-neutral-600">
                    <a href="#work" class="transition-colors hover:text-neutral-900">Work</a>
                    <a href="#about" class="transition-colors hover:text-neutral-900">About</a>
                    <a href="#contact" class="transition-colors hover:text-neutral-900">Contact</a>

                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="rounded-full border border-neutral-300/80 bg-white/40 px-4 py-1.5 backdrop-blur-sm transition-colors hover:border-neutral-400 hover:text-neutral-900">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="rounded-full border border-neutral-300/80 bg-white/40 px-4 py-1.5 backdrop-blur-sm transition-colors hover:border-neutral-400 hover:text-neutral-900">
                                Log in
                            </a>
                        @endauth
                    @endif
                </nav>
            </header>

            <main class="mx-auto flex w-full max-w-5xl flex-1 flex-col justify-center px-6 pb-16 pt-8 lg:px-10">
                <section class="max-w-2xl">
                    <p class="mb-4 text-sm font-medium uppercase tracking-[0.2em] text-neutral-500">
                        Portfolio
                    </p>

                    <h1 class="font-serif text-5xl font-medium leading-[1.1] tracking-tight text-neutral-900 sm:text-6xl lg:text-7xl">
                        Crafting thoughtful digital experiences.
                    </h1>

                    <p class="mt-6 max-w-xl text-lg leading-relaxed text-neutral-600">
                        A clean canvas for work, ideas, and stories — built on a simple foundation and ready to grow.
                    </p>

                    <div class="mt-10 flex flex-wrap items-center gap-4">
                        <a
                            href="#work"
                            class="inline-flex items-center rounded-full bg-neutral-900 px-6 py-3 text-sm font-medium text-white transition-colors hover:bg-neutral-800"
                        >
                            View selected work
                        </a>
                        <a
                            href="#contact"
                            class="inline-flex items-center rounded-full border border-neutral-300/80 bg-white/40 px-6 py-3 text-sm font-medium text-neutral-800 backdrop-blur-sm transition-colors hover:border-neutral-400"
                        >
                            Get in touch
                        </a>
                    </div>
                </section>

                <section id="work" class="mt-24 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach (['Project One', 'Project Two', 'Project Three'] as $project)
                        <article class="group rounded-2xl border border-white/70 bg-white/35 p-6 shadow-sm backdrop-blur-sm transition-transform hover:-translate-y-0.5">
                            <div class="mb-4 aspect-[4/3] rounded-xl bg-neutral-200/50"></div>
                            <h2 class="font-serif text-xl font-medium text-neutral-900">
                                {{ $project }}
                            </h2>
                            <p class="mt-2 text-sm leading-relaxed text-neutral-600">
                                A placeholder card ready for case studies, screenshots, and project details.
                            </p>
                        </article>
                    @endforeach
                </section>

                <section id="about" class="mt-24 max-w-2xl">
                    <h2 class="font-serif text-3xl font-medium text-neutral-900">
                        About
                    </h2>
                    <p class="mt-4 text-base leading-relaxed text-neutral-600">
                        This page uses a crumpled paper texture as its full background, creating a soft, tactile design space for a personal portfolio. Replace this copy with your bio, skills, and story.
                    </p>
                </section>

                <section id="contact" class="mt-24 max-w-2xl pb-8">
                    <h2 class="font-serif text-3xl font-medium text-neutral-900">
                        Contact
                    </h2>
                    <p class="mt-4 text-base leading-relaxed text-neutral-600">
                        Interested in working together? Add your email, social links, or contact form here.
                    </p>
                    <a
                        href="mailto:hello@example.com"
                        class="mt-6 inline-flex text-sm font-medium text-neutral-900 underline underline-offset-4 transition-colors hover:text-neutral-600"
                    >
                        hello@example.com
                    </a>
                </section>
            </main>

            <footer class="mx-auto w-full max-w-5xl px-6 py-8 text-sm text-neutral-500 lg:px-10">
                <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
            </footer>
        </div>
    </body>
</html>
