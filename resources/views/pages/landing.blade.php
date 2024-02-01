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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.core.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.theme.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/custom.js', 'resources/js/glide.js'])

</head>

<body class="font-sans antialiased text-gray-900">

    <x-modal name="coming-soon"  focusable>
        <div class="px-8 py-12">
            <h2 class="text-3xl font-bold text-center text-normal-green">Sprouting <strong class="text-orange-600">Soon</strong></h2>
            <div class="mt-10">
                <p class="text-lg text-center">
                    We are currently gathering our local planters and tree seedlings. We’ll let you know when they’re available
                </p>
            </div>
        </div>
    </x-modal>


    <header x-data="{ open: false }" x-on:scroll.window="open = window.scrollY > 20 " x-show="open" x-cloak x-transition
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
                    <a href="#" class="-m-1.5 p-1.5">
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

    @php
        use Jenssegers\Agent\Agent;
        $agent = new Agent();
    @endphp

    @if ($agent->isDesktop())
        <div class="glide">
            <div class="glide__track" data-glide-el="track">
                <div class="glide__slides">
                    <div class="glide__slide bg-emerald-700 md:h-[500px]">
                        <div class="max-w-5xl py-12 mx-auto">
                            <div class="grid grid-cols-2">
                                <div>
                                    <h2 class="text-4xl font-bold text-white">Plant Tree</h2>
                                    <p class="mt-8 text-gray-200">
                                        With our unique approach, you can directly connect with local farmers to plant
                                        native trees, fostering biodiversity and supporting local ecosystems. After
                                        successfully purchasing a tree, receive a personalized tree-planting
                                        certificate,
                                        symbolizing your commitment to a greener future.
                                    </p>
                                    <p class="mt-8 text-gray-200">
                                        Together, let's cultivate change
                                        and leave a lasting legacy for generations to come. Start your tree-planting
                                        journey
                                        today!
                                    </p>

                                    <div class="mt-8">
                                        <a href="{{ url('plant-tree') }}"
                                            class="inline-flex items-center justify-center px-8 py-2 text-base font-medium text-gray-900 border border-transparent rounded-full shadow-sm bg-light-green hover:bg-light-green/80">
                                            Get Started
                                        </a>
                                    </div>
                                </div>
                                <div>
                                    <img src="{{ asset('img/planting.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="glide__slide bg-lime-700 md:h-[500px]">
                        <div class="max-w-5xl py-12 mx-auto">
                            <div class="grid grid-cols-2 gap-8">
                                <div>
                                    <h2 class="text-4xl font-bold text-white">Plant and Grow a Tree</h2>
                                    <p class="mt-8 text-gray-200">
                                        Plant a tree effortlessly, receive a beautifully crafted tree planting
                                        certificate,
                                        and dive into the future of eco-conscious living. With our unique subscription
                                        service, not only can you monitor the growth and well-being of your tree, but
                                        you
                                        can also explore its development through cutting-edge GIS technology and LIDAR.
                                        Witness the impact of your contribution in real-time, as we blend nature with
                                        innovation.
                                    </p>
                                    <p class="mt-8 text-gray-200">
                                        Join us in cultivating a greener, healthier planet—one technologically nurtured
                                        tree
                                        at a time. Start your tree-growing journey today!
                                    </p>

                                    <div class="mt-8">
                                        <a href="{{ url('plant-grow-tree') }}"
                                            class="inline-flex items-center justify-center px-8 py-2 text-base font-medium text-gray-900 border border-transparent rounded-full shadow-sm bg-light-green hover:bg-light-green/80">
                                            Subscribe
                                        </a>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <img src="{{ asset('img/banner/plant-grow-tree.jpg') }}" class="mx-auto"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="glide__slide bg-orange-600 md:h-[500px]">
                        <div class="max-w-5xl py-12 mx-auto">
                            <div class="grid grid-cols-2 gap-8">
                                <div>
                                    <h2 class="text-4xl font-bold text-white">Support a Farmer</h2>
                                    <p class="mt-8 text-gray-200">
                                        Empower farmers by channeling funds straight to the grassroots, fostering
                                        sustainable farming practices and community development. By participating, you
                                        become a catalyst for change, bridging the gap between urban supporters and
                                        rural
                                        farmers. Join us in cultivating a thriving agricultural landscape, where your
                                        contributions directly uplift farmers and their communities.
                                    </p>
                                    <p class="mt-8 text-gray-200"> Together, let's sow
                                        the seeds of prosperity for farmers across the nation!
                                    </p>

                                    <div class="mt-8">
                                        <a href="{{ url('support-farmer') }}"
                                            class="inline-flex items-center justify-center px-8 py-2 text-base font-medium text-gray-900 border border-transparent rounded-full shadow-sm bg-light-green hover:bg-light-green/80">
                                            Get Started
                                        </a>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <img src="{{ asset('img/banner/farmer.jpg') }}" class="mx-auto" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="glide__slide bg-sky-700 md:h-[500px]">
                        <div class="max-w-5xl py-12 mx-auto">
                            <div class="grid grid-cols-2 gap-8">
                                <div>
                                    <h2 class="text-4xl font-bold text-white">Plant a Tree using Drone</h2>
                                    <p class="mt-8 text-gray-200">
                                        Harnessing the speed and efficiency of drones, tree planting has never been
                                        faster
                                        or easier. Our innovative approach employs GIS technology to monitor every
                                        detail,
                                        ensuring the success of your environmental contribution. The drone precisely
                                        delivers native tree seedlings encapsulated in seedballs and earth pills.
                                    </p>
                                    <p class="mt-8 text-gray-200">
                                        Join us in revolutionizing environmental conservation—one tree, one drone at a
                                        time.
                                        Plant the seeds of change effortlessly and make a lasting impact on our Earth!
                                    </p>

                                    <div class="mt-8">
                                        <a href="{{ url('drone') }}"
                                            class="inline-flex items-center justify-center px-8 py-2 text-base font-medium text-gray-900 border border-transparent rounded-full shadow-sm bg-light-green hover:bg-light-green/80">
                                            Get Started
                                        </a>
                                    </div>
                                </div>
                                <div class="self-center text-center">
                                    <img src="{{ asset('img/banner/drone.png') }}" class="mx-auto" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="glide__bullets" data-glide-el="controls[nav]">
                <button class="glide__bullet" data-glide-dir="=0"></button>
                <button class="glide__bullet" data-glide-dir="=1"></button>
                <button class="glide__bullet" data-glide-dir="=2"></button>
                <button class="glide__bullet" data-glide-dir="=3"></button>
                <button class="glide__bullet" data-glide-dir="=4"></button>
            </div>
        </div>
    @else
        <div class="relative block h-64 overflow-hidden">
            <img src="{{ asset('img/hero-2.png') }}" alt="" class="">
            <div class="absolute inset-0 z-10 p-10">
                <img src="{{ asset('img/planting.png') }}" class="scale-75">
            </div>
        </div>
    @endif

    <section class="p-4 bg-white lg:hidden">
        <div class="grid grid-cols-2 gap-4">

            <a href="{{ url('plant-tree') }}" 
                x-data
                x-on:click.prevent="$dispatch('open-modal', 'coming-soon')"
                class="flex col-span-2 gap-3 px-8 py-8 rounded-xl bg-emerald-700 min-h-52">
                <img src="{{ asset('img/plant-a-tree 6.png') }}" class="self-center flex-shrink-0 w-20 h-20" alt="">
                <div class="space-y-2">
                    <h3 class="text-3xl font-bold text-white uppercase">Plant a Tree</h3>
                    <p class="text-gray-100">Connect to a local and plant a tree of your choice</p>
                    <p class="text-3xl font-bold text-white">P100</p>
                </div>
            </a>

            <div x-data
                 x-on:click.prevent="$dispatch('open-modal', 'coming-soon')"
                 class="flex col-span-2 gap-2 px-8 py-8 bg-yellow-500 rounded-xl min-h-52">
                <div class="space-y-2">
                    <h3 class="text-2xl font-bold text-yellow-800 uppercase">Plant & Grow a Tree</h3>
                    <p class="text-sm text-yellow-800">Avail a monthly or yearly monitoring and maintenance </p>
                    <a href=""
                        class="relative inline-flex items-center gap-4 px-6 py-1 mt-3 text-sm font-medium text-white uppercase transition-all bg-orange-600 rounded-full hover:text-text-gray-100 hover:border-white hover:bg-green-600">
                        Subscribe
                    </a>
                </div>

                <img src="{{ asset('img/plant-a-tree 7.png') }}" class="self-center flex-shrink-0 w-28 h-28" alt="">
            </div>

            <div x-data
            x-on:click.prevent="$dispatch('open-modal', 'coming-soon')" 
            class="flex col-span-2 gap-3 px-6 py-8 rounded-xl bg-brown-600 min-h-52">
                <img src="{{ asset('img/plant-a-tree 8.png') }}" class="self-center flex-shrink-0 w-28 h-28" alt="">
                <div class="space-y-2">
                    <h3 class="text-2xl font-bold text-white uppercase">Support a Farmer</h3>
                    <p class="text-gray-100">Plant a fruit-bearing tree to support a local farmer</p>
                    <p class="text-3xl font-bold text-white">P500</p>
                </div>
            </div>


            <div x-data
            x-on:click.prevent="$dispatch('open-modal', 'coming-soon')"
            class="p-6 bg-emerald-600 rounded-xl">
                <div class="flex justify-between">
                    <h3 class="font-bold text-white uppercase">Drone Planting</h3>
                    <img src="{{ asset('img/plant-a-tree 5.png') }}" class="w-12 h-12" alt="">
                </div>
                <p class="mt-4 text-sm text-white">Disperse seedballs and earth pills </p>
                <p class="mt-2 text-base font-bold leading-5 text-white">P25 for 5 seed-balls</p>
            </div>

            <div x-data
            x-on:click.prevent="$dispatch('open-modal', 'coming-soon')"
            class="flex flex-col p-6 rounded-xl bg-rose-400">

                <img src="{{ asset('img/planting 2.png') }}" class="self-center w-24 h-24" alt="">
                <h3 class="text-xl font-bold text-center text-white uppercase">Become a Tree Planter</h3>
            </div>

        </div>
    </section>

    <section class="lg:hidden">
        <div class="px-8 pt-16">
            <img src="{{ asset('img/carbon-footprint.png') }}" class="w-auto h-20" alt="">
            <p class="mt-8 text-gray-600">
                We connect you directly to local farmers or community members to make sure your money is used to plant trees.
            </p>
        </div>
        <div class="relative flex justify-end px-8 py-10 text-right">
            <img src="{{ asset('img/blue-side-wave.png') }}" alt="" class="absolute top-0 left-0">
            <div>
                <img src="{{ asset('img/coin.png') }}" class="w-auto h-20 ml-auto" alt="">
                <p class=" w-[60%] ml-auto mt-4 text-gray-600">
                    Farmers gain income while restoring and protecting local landscapes
                </p>
            </div>
        </div>
        <div class="flex flex-col items-center justify-center gap-4 px-8 py-16">
            <img src="{{ asset('img/dashboard.png') }}" class="w-40 h-auto" alt="">
            <h4 class="text-2xl font-bold text-normal-green">Monitor your Progress</h4>
            <p class="text-center text-gray-600">
                Keep track of where you money goes, and your impact.
            </p>
        </div>

        <img src="{{ asset('img/green-bottom-wave.png') }}" class="w-full" alt="">
    </section>
    <section class="h-screen -mt-10 border-t bg-wave-green">
        <h2 class="text-3xl font-bold text-center text-white">In the News</h2>

        <div class="glide">
            <div class="pb-10 glide__track" data-glide-el="track">
                <div class="glide__slides">
                    <div class="glide__slide">
                        <div class="flex justify-center px-8 mt-8">
                            <img src="{{ asset('img/news/ecothon-korea.png') }}" class="h-auto w-72" alt="">
                        </div>
                        <div class="px-16 py-8 mt-8">
                            <p class="text-gray-100">
                                Once again, we bagged the Winning Award for the Ecothon 2023 at the COMEUP Global Startup Festival in Seoul, South Korea last November 9, 2023.
                            </p>
                            <div class="mt-8 text-center">
                                <a href="https://www.dti.gov.ph/news/philippine-startups-shine-at-asean-korea-startup-week-2023-and-ecothon-2023/"
                                    target="_blank"
                                    class="relative inline-flex items-center gap-4 px-6 py-1 mt-3 text-sm font-medium text-white uppercase transition-all bg-orange-600 rounded-full hover:text-text-gray-100 hover:border-white hover:bg-green-600">
                                    Read More
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="glide__bullets" data-glide-el="controls[nav]">
                <button class="glide__bullet" data-glide-dir="=0"></button>
                <button class="glide__bullet" data-glide-dir="=1"></button>
                <button class="glide__bullet" data-glide-dir="=2"></button>
            </div>
        </div>
    </section>

    <div x-data="{ open: true }" 
        x-on:scrollzzz.window="open = window.scrollY > 10"
        x-show="open"
        x-cloak
        x-transition class="fixed bottom-0 left-0 right-0 px-4 py-2 bg-white border-t shadow-inner lg:hidden">
        <div class="flex items-center gap-3 justify-evenly">
            <div class="flex flex-col items-center justify-center">
                <div class="h-6">
                    <x-heroicon-o-home class="w-5 h-5 text-gray-600" />
                </div>
                <span class="mt-0.5 text-xs">Home</span>
            </div>
            <div class="flex flex-col items-center justify-center">
                <div class="h-6">
                    <x-heroicon-o-user class="w-5 h-5 text-gray-600" />
                </div>
                <span class="mt-0.5 text-xs">Account</span>
            </div>
            <div class="flex flex-col items-center justify-center">
                <div
                    class="flex items-center justify-center w-16 h-16 p-4 -mt-8 bg-white border rounded-full shadow-md">
                    <x-phosphor-plant-fill class="w-10 h-10 text-green-700" />
                </div>
                <span class="mt-0.5 text-xs">Plant</span>
            </div>
            <div class="flex flex-col items-center justify-center">
                <div class="h-6">
                    <x-heroicon-o-chat-bubble-bottom-center-text class="w-5 h-5 text-gray-600" />
                </div>
                <span class="mt-0.5 text-xs">Inbox</span>
            </div>
            <div class="flex flex-col items-center justify-center">
                <div class="h-6">
                    <x-heroicon-o-bars-3 class="w-5 h-5 text-gray-600" />
                </div>
                <span class="mt-0.5 text-xs">Menu</span>
            </div>
        </div>
    </div>

</body>

</html>
