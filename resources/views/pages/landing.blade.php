<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('seo')
    @include('includes.partials.favicon')

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="bg-gray-900">
        <header class="absolute inset-x-0 top-0 z-50">
            <div class="mx-auto max-w-5xl">
                <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                    <div class="flex lg:flex-1">
                        <a href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only">etanom</span>
                            <img src="{{ asset('img/logo-green.png') }}" class="h-10 w-auto" alt="">
                        </a>
                    </div>
                    <div class="flex lg:hidden">
                        <button type="button"
                            class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-400">
                            <span class="sr-only">Open main menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </button>
                    </div>
                    <div class="hidden lg:flex lg:flex-1 lg:justify-end">

                        <div class="flex items-center gap-8 text-gray-900">
                            <x-header-menu-link label="About" href="{{ url('/about') }}"
                                active="{{ request()->is('/about') }}" />
                            <x-header-menu-link label="FAQ" href="{{ url('/faq') }}"
                                active="{{ request()->is('/faq') }}" />
                            <x-header-menu-link label="Login" href="{{ url('/login') }}"
                                active="{{ request()->is('/login') }}" />

                            <a href="{{ route('register') }}"
                                class="inline-flex items-center justify-center rounded-full border border-transparent bg-light-green px-8 py-2 text-base font-medium text-gray-900 shadow-sm hover:bg-light-green/80">
                                Get Started
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <div class="relative isolate overflow-hidden pt-14">
            <img src="{{ asset('img/hero-2.png') }}" alt=""
                class="absolute inset-0 -z-10 h-full w-full object-cover">
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
                aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            <div class="mx-auto max-w-5xl px-0 py-16 sm:py-48 lg:px-8 lg:py-32">
                <div class="grid gap-8 lg:grid-cols-2">
                    <div class="px-8">
                        <h1 class="text-center text-3xl font-bold text-gray-900 lg:text-left lg:text-4xl">Connect to a
                            local,<br>and plant a tree</h1>
                        <p class="mt-8 text-center text-lg text-gray-500 lg:text-left">
                            Directly fund a local farmer or community member to plant a tree for you.
                        </p>
                        <div class="mt-8 text-center lg:text-left">
                            <a href="{{ url('register') }}"
                                class="mx-auto mt-6 inline-block rounded-lg bg-primary-orange px-8 py-3 text-sm font-semibold text-white hover:bg-gray-900 md:inline-flex">
                                Plant Now
                            </a>
                        </div>
                    </div>
                    <div class="hidden lg:block">
                        <img src="{{ asset('img/planting.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
                aria-hidden="true">
                <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
        </div>
    </div>
    <section class="relative bg-white">
        <img src="{{ asset('img/wave-white-top.png') }}" class="absolute -top-8 w-full lg:-top-16" alt="">
        <div class="mx-auto max-w-5xl px-8 py-16 lg:py-24">
            <div class="grid gap-8 sm:grid-cols-3">
                <div class="text-center">
                    <img src="{{ asset('img/carbon-footprint.png') }}" alt="" class="mx-auto h-32 w-32">

                    <h3 class="mt-8 text-lg font-bold text-normal-green">Direct impact</h3>
                    <p class="mt-2 text-sm text-gray-600">
                        We connect you directly to local farmers to make sure your money is used directly to plant
                        trees.
                    </p>
                </div>

                <div class="text-center">
                    <img src="{{ asset('img/coin.png') }}" alt="" class="mx-auto h-32 w-32">

                    <h3 class="mt-8 text-lg font-bold text-normal-green">Provide livelihood</h3>
                    <p class="mt-2 text-sm text-gray-600">
                        Farmers gain income while restoring and protecting local landscapes
                    </p>
                </div>

                <div class="text-center">
                    <img src="{{ asset('img/dashboard.png') }}" alt="" class="mx-auto h-32 w-32">

                    <h3 class="mt-8 text-lg font-bold text-normal-green">Monitor your Progress</h3>
                    <p class="mt-2 text-sm text-gray-600">
                        Keep track of where you money goes, and your environmental impact.
                    </p>
                </div>

            </div>
        </div>
    </section>

</body>

</html>
