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

<body class="font-sans antialiased text-gray-900">
    
    <header x-data="{ open: false }" x-on:scroll.window="open = window.scrollY > 20 " x-show="open" x-cloak x-transition
        class="fixed inset-x-0 top-0 z-50 bg-white shadow-sm">
        <div class="max-w-5xl mx-auto">
            <nav class="flex items-center justify-between px-6 py-3 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="{{ url('/') }}" class="-m-1.5 p-1.5">
                        <span class="sr-only">etanom</span>
                        <img src="{{ asset('img/logo-green.png') }}" class="w-auto h-10" alt="">
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <div class="relative" x-data="{ open: false }" @click.outside="open = false"
                        @close.stop="open = false">
                        <div @click="open = ! open">
                            <button type="button" class="py-1 text-normal-green">
                                <x-heroicon-o-shopping-cart class="flex-shrink-0 h-7 w-7" />
                            </button>
                        </div>

                        <div x-show="open" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute right-0 z-50 mt-2 origin-top-right rounded-md shadow-lg w-72"
                            style="display: none;" @click="open = false">
                            <div class="py-1 bg-white rounded-md ring-1 ring-black ring-opacity-5 dark:bg-gray-700">
                                @auth
                                    @livewire('cart-summary')
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <header class="">
        <div class="max-w-5xl mx-auto">
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="{{ url('/') }}" class="-m-1.5 p-1.5">
                        <span class="sr-only">etanom</span>
                        <img src="{{ asset('img/logo-green.png') }}" class="w-auto h-10" alt="">
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <button type="button"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-400">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
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
                            class="inline-flex items-center justify-center px-8 py-2 text-base font-medium text-gray-900 border border-transparent rounded-full shadow-sm bg-light-green hover:bg-light-green/80">
                            Get Started
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main>
        {{ $slot }}
        @yield('content')
    </main>

    @include('includes.mobile-menu')

</body>

</html>
