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
    @vite(['resources/css/app.css', 'resources/js/custom.js'])

</head>

<body class="font-sans antialiased text-gray-900">
    <header 
        x-data="{ open: false }"
        x-on:scroll.window="open = window.scrollY > 20 "
        x-show="open"
        x-cloak
        x-transition
         class="fixed inset-x-0 top-0 z-50 bg-white shadow-sm">
        <div class="max-w-5xl mx-auto">
            <nav class="flex items-center justify-between px-6 py-3 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">etanom</span>
                        <img src="{{ asset('img/logo-green.png') }}" class="w-auto h-10" alt="">
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <div class="relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
                        <div @click="open = ! open">
                            <button type="button" class="py-1 text-normal-green">
                                <x-heroicon-o-shopping-cart class="flex-shrink-0 w-7 h-7"/>
                            </button>
                        </div>
        
                        <div x-show="open"
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95"
                                class="absolute right-0 z-50 mt-2 origin-top-right rounded-md shadow-lg w-72"
                                style="display: none;"
                                @click="open = false">
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

    <div class="bg-gray-900">
        <header class="absolute inset-x-0 top-0 z-50">
            <div class="max-w-5xl mx-auto">
                <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                    <div class="flex lg:flex-1">
                        <a href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only">etanom</span>
                            <img src="{{ asset('img/logo-green.png') }}" class="w-auto h-10" alt="">
                        </a>
                    </div>
                    <div class="flex lg:hidden">
                        <button type="button"
                            class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-400">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
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
                                class="inline-flex items-center justify-center px-8 py-2 text-base font-medium text-gray-900 border border-transparent rounded-full shadow-sm bg-light-green hover:bg-light-green/80">
                                Get Started
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <div class="relative overflow-hidden lg:h-screen isolate pt-14">
            <img src="{{ asset('img/hero-2.png') }}" alt=""
                class="absolute inset-0 object-cover w-full h-full -z-10">
            <div class="absolute inset-x-0 overflow-hidden -top-40 -z-10 transform-gpu blur-3xl sm:-top-80"
                aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            <div class="max-w-5xl px-0 py-16 mx-auto sm:py-48 lg:px-8 lg:py-32">
                <div class="grid gap-8 lg:grid-cols-2">
                    <div class="px-8">
                        <h1 class="text-3xl font-bold text-center text-gray-900 lg:text-left lg:text-4xl">Connect to a
                            local,<br>and plant a tree</h1>
                        <p class="mt-8 text-lg text-center text-gray-500 lg:text-left">
                            Directly fund a local farmer or community member to plant a tree for you.
                        </p>
                        <div class="mt-8 text-center lg:text-left">
                            <a href="#plans"
                                class="inline-block px-8 py-3 mx-auto mt-6 text-sm font-semibold text-white rounded-lg bg-primary-orange hover:bg-gray-900 md:inline-flex">
                                Get Started
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
    <section class="bg-white" id="plans">
        <div class="px-8 py-12 mx-auto max-w-7xl">
            <div class="text-center">
                <h6 class="font-bold uppercase text-normal-green">What you can do</h6>
                <h2 class="hidden mt-8 text-xl font-bold text-gray-900 lg:block lg:text-4xl">The only click that gives you a green thumb</h2>
                <p class="mt-8">Together we can help make the world greener and fairer!<br class="hidden lg:block"> Choose from different options and do your bit.</p>
            </div>
            <div class="grid gap-8 mt-8 lg:grid-cols-4">
                <div class="relative grid flex-col justify-between grid-cols-2 p-6 text-gray-100 bg-green-900 rounded-lg lg:flex lg:p-6 lg:pb-0">
                    <div>
                        <div class="lg:h-[180px]">
                            <h3 class="text-2xl font-bold lg:text-center">Plant a Tree</h3>
                            <p class="mt-1 text-xs lg:mt-4 lg:text-base lg:text-center">
                                Connect to a local and plant a native tree of your choice
                            </p>
                            <h4 class="mt-4 text-3xl font-bold lg:text-center">₱100</h4>
                        </div>

                        <div class="hidden text-center lg:block">
                            <a href="#" class="inline-block px-8 py-2 text-base font-medium text-gray-100 transition-all bg-transparent border-2 border-white rounded-md hover:bg-white hover:text-normal-green">Buy Tree</a>
                        </div>
                    </div>
                    <div>
                        <img src="{{ asset('img/plant.png') }}" class="w-auto h-32 mx-auto" alt="">
                    </div>
                </div>

                <div class="relative grid flex-col justify-between grid-cols-2 p-6 text-gray-100 bg-yellow-600 rounded-lg lg:flex lg:p-6 lg:pb-0">
                    <div>
                        <div class="lg:h-[180px]">
                            <h3 class="text-2xl font-bold lg:text-center">Plant & Grow Tree</h3>
                            <p class="mt-1 text-xs lg:mt-4 lg:text-base lg:text-center">
                                Includes monthly monitoring and maintenance
                            </p>
                        </div>
                        <div class="hidden mb-4 text-center lg:block">
                            <a href="#" class="inline-block px-8 py-2 text-base font-medium text-gray-100 transition-all bg-transparent border-2 border-white rounded-md hover:bg-white hover:text-normal-green">Subscribe</a>
                        </div>
                    </div>
                    <div>
                        <img src="{{ asset('img/sprout.png') }}" class="w-auto h-32 mx-auto" alt="">
                    </div>
                </div>

                <div class="relative grid flex-col justify-between grid-cols-2 p-6 text-gray-100 bg-yellow-700 rounded-lg lg:flex lg:p-6 lg:pb-0">
                    <div>
                        <div class="lg:h-[180px]">
                            <h3 class="text-2xl font-bold lg:text-center">Support a Farmer</h3>
                            <p class="mt-1 text-xs lg:mt-4 lg:text-base lg:text-center">
                                Plant a fruit-bearing tree to support a local farmer
                            </p>
                            <h4 class="mt-4 text-3xl font-bold lg:text-center">₱500</h4>
                        </div>
                        <div class="hidden mb-4 text-center lg:block">
                            <a href="#" class="inline-block px-8 py-2 text-base font-medium text-gray-100 transition-all bg-transparent border-2 border-white rounded-md hover:bg-white hover:text-normal-green">Get Started</a>
                        </div>
                    </div>
                    <div>
                        <img src="{{ asset('img/farmer.png') }}" class="w-auto h-32 mx-auto" alt="">
                    </div>
                </div>

                <div class="relative grid flex-col justify-between grid-cols-2 p-6 text-gray-100 bg-green-700 rounded-lg lg:flex lg:p-6 lg:pb-0">
                    <div>
                        <div class="lg:h-[180px]">
                            <h3 class="text-xl font-bold lg:text-2xl lg:text-center">Plant Tree using Drone</h3>
                            <p class="mt-1 text-xs lg:mt-4 lg:text-base lg:text-center">
                                Plant a tree using drone that spreads seedball and Earth Pill biotechnology
                            </p>
                            <h4 class="mt-4 font-bold lg:text-3xl lg:text-center lg:hidden">₱25 per 5 seedballs</h4>
                        </div>
                        <div class="hidden mb-4 text-center lg:block">
                            <a href="#" class="inline-block px-8 py-2 text-base font-medium text-gray-100 transition-all bg-transparent border-2 border-white rounded-md hover:bg-white hover:text-normal-green">Get Started</a>
                        </div>
                    </div>
                    <div>
                        <img src="{{ asset('img/drone.png') }}" class="w-auto h-32 mx-auto" alt="">
                    </div>
                </div>
            </div>

            <p class="hidden text-3xl font-bold text-center my-7 lg:block">OR</p>

            <div class="flex justify-center mt-8">
                <div class="grid max-w-xl grid-cols-2 p-8 text-gray-100 rounded-lg bg-sky-700 ">
                    <div>
                        <h3 class="text-xl font-bold lg:text-2xl">Become a Tree Planter</h3>
                        <p class="mt-1 text-xs lg:mt-4 lg:text-base">
                            Are you a part of community who wanted to earn by planting tree?
                        </p>

                        <div class="mt-8 m lg:block">
                            <a href="#" class="relative inline-flex items-center gap-4 px-8 py-2 pr-10 text-base font-medium text-gray-100 transition-all border-2 border-green-900 rounded-full hover:bg-green-600 hover:text-text-gray-100 hover:border-white bg-normal-green">
                                Apply Now
                                <div class="absolute flex items-center justify-center p-1 bg-green-700 rounded-full right-1 w-7 h-7">
                                    <x-heroicon-s-chevron-right class="w-5 h-5"/>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="lg:mt-8">
                        <img src="{{ asset('img/farmer-2.png') }}" class="w-auto h-32 mx-auto" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="relative hidden bg-white">
        <img src="{{ asset('img/wave-white-top.png') }}" class="absolute w-full -top-6 sm:-top-8 lg:-top-16" alt="">
        <div class="max-w-5xl px-8 py-16 mx-auto lg:py-24">
            <div class="grid gap-8 sm:grid-cols-3">
                <div class="text-center">
                    <img src="{{ asset('img/carbon-footprint.png') }}" alt="" class="w-32 h-32 mx-auto">

                    <h3 class="mt-8 text-lg font-bold text-normal-green">Direct impact</h3>
                    <p class="mt-2 text-sm text-gray-600">
                        We connect you directly to local farmers to make sure your money is used directly to plant
                        trees.
                    </p>
                </div>

                <div class="text-center">
                    <img src="{{ asset('img/coin.png') }}" alt="" class="w-32 h-32 mx-auto">

                    <h3 class="mt-8 text-lg font-bold text-normal-green">Provide livelihood</h3>
                    <p class="mt-2 text-sm text-gray-600">
                        Farmers gain income while restoring and protecting local landscapes
                    </p>
                </div>

                <div class="text-center">
                    <img src="{{ asset('img/dashboard.png') }}" alt="" class="w-32 h-32 mx-auto">

                    <h3 class="mt-8 text-lg font-bold text-normal-green">Monitor your Progress</h3>
                    <p class="mt-2 text-sm text-gray-600">
                        Keep track of where you money goes, and your environmental impact.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="py-16"></section>

    <div x-data="{ open: false }"
        x-on:scroll.window="open = window.scrollY > 20 "
        x-show="open"
        x-cloak
        x-transition
        class="fixed bottom-0 left-0 right-0 px-4 py-2 bg-white border-t shadow-inner lg:hidden">
        <div class="flex items-center gap-3 justify-evenly">
            <div class="flex flex-col items-center justify-center">
                <div class="h-6">
                    <x-heroicon-o-home class="w-5 h-5 text-gray-600"/>
                </div>
                <span class="mt-0.5 text-xs">Home</span>
            </div>
            <div class="flex flex-col items-center justify-center">
                <div class="h-6">
                    <x-heroicon-o-user class="w-5 h-5 text-gray-600"/>
                </div>
                <span class="mt-0.5 text-xs">Account</span>
            </div>
            <div class="flex flex-col items-center justify-center">
                <div class="flex items-center justify-center w-16 h-16 p-4 -mt-8 bg-white border rounded-full shadow-md">
                    <x-heroicon-s-bolt class="w-10 h-10 text-green-700"/>
                </div>
                <span class="mt-0.5 text-xs">Plant</span>
            </div>
            <div class="flex flex-col items-center justify-center">
                <div class="h-6">
                    <x-heroicon-o-chat-bubble-bottom-center-text class="w-5 h-5 text-gray-600"/>
                </div>
                <span class="mt-0.5 text-xs">Inbox</span>
            </div>
            <div class="flex flex-col items-center justify-center">
                <div class="h-6">
                    <x-heroicon-o-bars-3 class="w-5 h-5 text-gray-600"/>
                </div>
                <span class="mt-0.5 text-xs">Menu</span>
            </div>
        </div>
    </div>

</body>

</html>
