<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

    <style>
        html,
        body {
            font-family: 'Poppins', sans-serif;
        }

        [x-cloak] {
            display: none;
        }
    </style>

    @filamentStyles
    @stack('css')
</head>

<body class="font-sans antialiased text-gray-900">
    <div class="relative z-20 shadow-md">
        <div
            class="flex items-center justify-between max-w-5xl px-6 py-5 mx-auto sm:py-8 md:justify-start md:space-x-10 lg:px-8">
            <div>
                <a href="{{ url('/') }}" class="flex">
                    <img src="{{ url('img/logo-green.png') }}" class="w-auto h-6 lg:h-10" alt="">
                </a>
            </div>
            <div class="-my-2 -mr-2 md:hidden">
                <div x-data="{ open: false }">
                    <button type="button" x-on:click="open = !open"
                        class="inline-flex items-center justify-center p-2 text-gray-400 bg-white rounded-md hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-light-green"
                        aria-expanded="false">
                        <span class="sr-only">Open menu</span>
                        <!-- Heroicon name: outline/bars-3 -->
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>

                    <div x-show="open" x-cloak class="relative z-10" aria-labelledby="slide-over-title" role="dialog"
                        aria-modal="true">
                        <!-- Background backdrop, show/hide based on slide-over state. -->
                        <div class="fixed inset-0"></div>

                        <div class="fixed inset-0 overflow-hidden">
                            <div class="absolute inset-0 overflow-hidden">
                                <div class="fixed inset-y-0 right-0 flex w-full pointer-events-none">

                                    <div x-show="open"
                                        x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                                        x-transition:enter-start="translate-x-full"
                                        x-transition:enter-end="translate-x-0"
                                        x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                                        x-transition:leave-start="translate-x-0"
                                        x-transition:leave-end="translate-x-full" class="w-full pointer-events-auto">
                                        <div class="flex flex-col h-full py-6 overflow-y-scroll bg-white shadow-xl">
                                            <div class="px-4 sm:px-6">
                                                <div class="flex items-start justify-between">
                                                    <div id="slide-over-title">
                                                        <img src="{{ url('img/logo.svg') }}" class="w-auto h-6 lg:h-10"
                                                            alt="">
                                                    </div>
                                                    <div class="flex items-center ml-3 h-7">

                                                        <button type="button" x-on:click="open = !open"
                                                            class="text-gray-400 bg-white rounded-md hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                                            <span class="sr-only">Close panel</span>
                                                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                                                stroke-width="1.5" stroke="currentColor"
                                                                aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M6 18L18 6M6 6l12 12" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="relative flex-1 px-4 mt-12 sm:px-6">
                                                <div
                                                    class="flex flex-col items-center gap-6 text-gray-900 md:ml-12 lg:gap-12">
                                                    <x-header-menu-link label="Home" href="{{ url('/') }}"
                                                        active="{{ request()->is('/') }}" />
                                                    <x-header-menu-link label="About" href="{{ url('/about') }}"
                                                        active="{{ request()->is('/about') }}" />
                                                    <x-header-menu-link label="Blog" href="{{ url('/blog') }}"
                                                        active="{{ request()->is('/blog') }}" />
                                                    <x-header-menu-link label="FAQ" href="{{ url('/faq') }}"
                                                        active="{{ request()->is('/faq') }}" />
                                                    <x-header-menu-link label="Login" href="{{ url('/login') }}"
                                                        active="{{ request()->is('/login') }}" />

                                                    <a href="{{ route('register') }}"
                                                        class="inline-flex items-center justify-center px-8 py-2 text-base font-medium text-gray-900 border border-transparent rounded-full shadow-sm bg-light-green hover:bg-light-green/80">Get
                                                        Started</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="hidden md:flex md:flex-1 md:items-center md:justify-between">
                <nav class="flex space-x-10">


                </nav>
                <div class="flex items-center text-gray-900 md:ml-12 lg:gap-12">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="/logout"  
                        onclick="event.preventDefault();
                        this.closest('form').submit();"
                            class="block w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 underline transition duration-150 ease-in-out dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800">
                            Logout
                        </a>

                    </form>
                    
                    <a href="{{ route('register') }}"
                        class="inline-flex items-center justify-center px-8 py-2 text-base font-medium text-gray-900 border border-transparent rounded-full shadow-sm bg-light-green hover:bg-light-green/80">
                        Skip
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div>
        {{ $slot ?? '' }}
        @yield('content')
    </div>

    @filamentScripts
    @stack('js')
</body>

</html>
