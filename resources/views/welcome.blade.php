<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="relative isolate overflow-hidden bg-gray-900">
        <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2830&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply"
            alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
        <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]">
            <svg class="relative left-[calc(50%-11rem)] -z-10 h-[21.1875rem] max-w-none -translate-x-1/2 rotate-[30deg] sm:left-[calc(50%-30rem)] sm:h-[42.375rem]"
                viewBox="0 0 1155 678">
                <path fill="url(#45de2b6b-92d5-4d68-a6a0-9b9b2abad533)" fill-opacity=".2"
                    d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
                <defs>
                    <linearGradient id="45de2b6b-92d5-4d68-a6a0-9b9b2abad533" x1="1155.49" x2="-78.208"
                        y1=".177" y2="474.645" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#9089FC"></stop>
                        <stop offset="1" stop-color="#FF80B5"></stop>
                    </linearGradient>
                </defs>
            </svg>
        </div>
        <div class="px-6 lg:px-8">
            <nav class="flex items-center justify-between pt-6" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <svg class="css-19y88dk" width="90" id="Layer_1" data-name="Layer 1"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 108.57">
                            <path class="cls-1"
                                d="M202,87.62l-15.1-64.79a28.64,28.64,0,0,1,10.65-2.41q4.75,0,6.95,2a11,11,0,0,1,2.94,6.26l5.74,27.79q3,14.81,4.38,24.32c.2.8.6,1.21,1.21,1.21l10.42-59.81A63.86,63.86,0,0,1,241,21.32a58.89,58.89,0,0,1,11.47.91l10.43,58.6c.09.8.5,1.21,1.2,1.21q2.73-15.71,4.69-25.53l7.55-34.73a34.09,34.09,0,0,1,9-.91,20.85,20.85,0,0,1,9.14,1.66l.6,1.21L276.94,96.68a88.3,88.3,0,0,1-12.91.76q-7.93,0-10.8-1.81t-3.78-7.7l-3.32-18.58q-3-17.37-4.83-29.9h-.91q-1,7.84-5,29.75l-5.13,27.48a94.34,94.34,0,0,1-13.14.76q-7.86,0-10.8-2T202,87.62Z"
                                fill="white"></path>
                            <path class="cls-1"
                                d="M302.76,30.84a18.84,18.84,0,0,1,2.5-5.74,17,17,0,0,1,3.85-4.53q12.22,1.51,16.76,13.59,5.75-13.44,19.18-13.44a35.87,35.87,0,0,1,9.06,1.06,34.42,34.42,0,0,1-4.83,18.42,29.93,29.93,0,0,0-6.95-1.05q-8.76,0-14.19,9.36V96.68a58.62,58.62,0,0,1-9.75.76,64.16,64.16,0,0,1-10-.76V46.39Q308.35,35.68,302.76,30.84Z"
                                fill="white"></path>
                            <path class="cls-1"
                                d="M419.35,65.57H377.67q.45,8.31,3.85,13.07t11.86,4.75q8.76,0,20.09-5.13a21.72,21.72,0,0,1,5.58,11.93q-12.07,8.61-29,8.61-16,0-24.24-9.89t-8.23-29.38a59,59,0,0,1,2.11-16.38,36.53,36.53,0,0,1,6.19-12.54,28.29,28.29,0,0,1,10-8.08,30.37,30.37,0,0,1,13.44-2.87A36.57,36.57,0,0,1,402.89,22a27.63,27.63,0,0,1,10,6.65A27.91,27.91,0,0,1,419,38.84a39,39,0,0,1,2,12.84,54.47,54.47,0,0,1-.46,7.17Q420.11,62.26,419.35,65.57ZM390.21,33.86q-11.79,0-12.69,17.82h25.07V49.87q0-7.26-3-11.63T390.21,33.86Z"
                                fill="white"></path>
                            <path class="cls-1"
                                d="M496.83,46.24V79.17q0,9.66,3.17,14.34a17.06,17.06,0,0,1-11.63,4.23q-6.5,0-8.91-2.94c-1.61-2-2.42-5.06-2.42-9.29V50.32q0-6.8-1.66-9.51c-1.11-1.82-3.17-2.72-6.19-2.72q-8,0-14.95,7.25V96.68a33.79,33.79,0,0,1-4.76.61c-1.66.1-3.35.15-5.06.15s-3.39,0-5.06-.15a33.65,33.65,0,0,1-4.75-.61V21.93l.9-1.06h7.55q8.46,0,10.58,9.06,11-9.51,21.89-9.51t16.09,7Q496.82,34.46,496.83,46.24Z"
                                fill="white"></path>
                            <path class="cls-1"
                                d="M151.81,28.33l-25-6c-3.09-9-8.1-16.29-14.62-19.92C95.35-7,59,13,31.86,25.64A119.25,119.25,0,0,1,0,35.48s22.52,82.66,81.58,72.17c39.64-7,52.26-45.1,48-74ZM59.09,64c-19.34,3-26.72-20.29-26.72-20.29s9.93,2.27,14.94-1.07C55,37.49,63.6,31.72,69.13,34.37,78.14,38.69,78.44,61,59.09,64Zm43.3-37.79a5.72,5.72,0,0,1-6.87-4.24A5.52,5.52,0,1,1,106.15,19,5.71,5.71,0,0,1,102.39,26.16Z"
                                fill="white"></path>
                        </svg>
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <button type="button"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-400">
                        <span class="sr-only">Open main menu</span>
                        <!-- Heroicon name: outline/bars-3 -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
                <div class="hidden lg:flex lg:gap-x-12">
                    <a href="#" class="text-sm font-semibold leading-6 text-white">Home</a>

                    <a href="#" class="text-sm font-semibold leading-6 text-white">Our Approach</a>

                    <a href="#" class="text-sm font-semibold leading-6 text-white">Our Projects</a>

                    <a href="#" class="text-sm font-semibold leading-6 text-white">Learn More</a>
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    <a href="#" class="text-sm font-semibold leading-6 text-white">Log in <span
                            aria-hidden="true">&rarr;</span></a>
                </div>
            </nav>
            <!-- Mobile menu, show/hide based on menu open state. -->
            <div role="dialog" aria-modal="true">
                <div focus="true" class="fixed inset-0 z-10 overflow-y-auto bg-gray-900 px-6 py-6 sm:hidden">
                    <div class="flex items-center justify-between">
                        <a href="#" class="-m-1.5 p-1.5">
                            @include('includes.partials.logo')
                        </a>
                        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-400">
                            <span class="sr-only">Close menu</span>
                            <!-- Heroicon name: outline/x-mark -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-6 flow-root">
                        <div class="-my-6 divide-y divide-gray-500/25">
                            <div class="space-y-2 py-6">
                                <a href="#"
                                    class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-white hover:bg-gray-400/10">Product</a>

                                <a href="#"
                                    class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-white hover:bg-gray-400/10">Features</a>

                                <a href="#"
                                    class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-white hover:bg-gray-400/10">Marketplace</a>

                                <a href="#"
                                    class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-white hover:bg-gray-400/10">Company</a>
                            </div>
                            <div class="py-6">
                                <a href="#"
                                    class="-mx-3 block rounded-lg py-2.5 px-3 text-base font-semibold leading-6 text-white hover:bg-gray-400/10">Log
                                    in</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                <div class="text-center">
                    <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Plant Your Way to a Greener
                        Earth
                    </h1>
                    <p class="mt-6 text-lg leading-8 text-gray-300">
                        Simply purchase our seedballs and throw them in any open space you desire. The seedballs will
                        then
                        sprout into beautiful plants, helping to improve the environment and combat climate change. Join
                        the
                        movement and help us make the earth a greener place with Tanom.
                    </p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a href="{{ url('calculator') }}"
                            class="rounded-md bg-green-500 px-3.5 py-1.5 text-base font-semibold leading-7 text-white shadow-sm hover:bg-green-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-400">Get
                            started</a>
                        <a href="#" class="text-base font-semibold leading-7 text-white">Learn more <span
                                aria-hidden="true">→</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]">
            <svg class="relative left-[calc(50%+3rem)] h-[21.1875rem] max-w-none -translate-x-1/2 sm:left-[calc(50%+36rem)] sm:h-[42.375rem]"
                viewBox="0 0 1155 678">
                <path fill="url(#ecb5b0c9-546c-4772-8c71-4d3f06d544bc)" fill-opacity=".2"
                    d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
                <defs>
                    <linearGradient id="ecb5b0c9-546c-4772-8c71-4d3f06d544bc" x1="1155.49" x2="-78.208"
                        y1=".177" y2="474.645" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#9089FC"></stop>
                        <stop offset="1" stop-color="#FF80B5"></stop>
                    </linearGradient>
                </defs>
            </svg>
        </div>
    </div>
    <div class="bg-gray-50 pt-12 sm:pt-16">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-4xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Our Milestone</h2>
                <p class="mt-3 text-xl text-gray-500 sm:mt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Repellendus repellat laudantium.</p>
            </div>
        </div>
        <div class="mt-10 bg-white pb-12 sm:pb-16">
            <div class="relative">
                <div class="absolute inset-0 h-1/2 bg-gray-50"></div>
                <div class="relative mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto max-w-4xl">
                        <dl class="rounded-lg bg-white shadow-lg sm:grid sm:grid-cols-3">
                            <div
                                class="flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r">
                                <dt class="order-2 mt-2 text-lg font-medium leading-6 text-gray-500">Raised for
                                    projects
                                </dt>
                                <dd class="order-1 text-5xl font-bold tracking-tight text-green-600">$1.5M+</dd>
                            </div>
                            <div
                                class="flex flex-col border-t border-b border-gray-100 p-6 text-center sm:border-0 sm:border-l sm:border-r">
                                <dt class="order-2 mt-2 text-lg font-medium leading-6 text-gray-500">Seedballs Planted
                                </dt>
                                <dd class="order-1 text-5xl font-bold tracking-tight text-green-600">340K</dd>
                            </div>
                            <div
                                class="flex flex-col border-t border-gray-100 p-6 text-center sm:border-0 sm:border-l">
                                <dt class="order-2 mt-2 text-lg font-medium leading-6 text-gray-500">Area</dt>
                                <dd class="order-1 text-5xl font-bold tracking-tight text-green-600">2120ha</dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-gray-100 py-16">

        <div class="mx-auto px-6 lg:px-8">
            <div class="mx-auto max-w-4xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Our Products</h2>
                <p class="mt-3 text-xl text-gray-500 sm:mt-4">With only 7 pesos, you can now buy a seedball and help
                    the
                    earth.</p>
            </div>

            <div class="grid grid-cols-4 gap-6 pt-12">
                <div class="rounded-md bg-white p-4">
                    <div class="relative overflow-x-hidden rounded-2xl">
                        <div class="flex h-40 items-center justify-center bg-gray-100">
                            <img class="h-16 w-16" src="{{ asset('img/plant.png') }}">
                        </div>
                        <p class="group absolute right-2 top-2 cursor-pointer rounded-full bg-white p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 opacity-70 group-hover:opacity-50"
                                fill="none" viewBox="0 0 24 24" stroke="black">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </p>
                    </div>
                    <div class="mt-4 mb-2 flex justify-between pl-2">
                        <div>
                            <p class="mb-0 text-lg font-semibold text-gray-900">1 x Seedball</p>
                            <p class="text-md mt-0 text-gray-800">$7.00</p>
                        </div>
                        <div class="group mb-1 mr-4 flex cursor-pointer flex-col-reverse">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:opacity-70"
                                fill="none" viewBox="0 0 24 24" stroke="gray">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="rounded-md bg-white p-4">
                    <div class="relative overflow-x-hidden rounded-2xl">
                        <div class="flex h-40 items-center justify-center bg-gray-100">
                            <img class="h-16 w-16" src="{{ asset('img/plant.png') }}">
                            <img class="h-16 w-16" src="{{ asset('img/plant.png') }}">
                        </div>
                        <p class="group absolute right-2 top-2 cursor-pointer rounded-full bg-white p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 opacity-70 group-hover:opacity-50"
                                fill="none" viewBox="0 0 24 24" stroke="black">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </p>
                    </div>
                    <div class="mt-4 mb-2 flex justify-between pl-2">
                        <div>
                            <p class="mb-0 text-lg font-semibold text-gray-900">10 x Seedball</p>
                            <p class="text-md mt-0 text-gray-800">$60.00</p>
                        </div>
                        <div class="group mb-1 mr-4 flex cursor-pointer flex-col-reverse">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:opacity-70"
                                fill="none" viewBox="0 0 24 24" stroke="gray">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="rounded-md bg-white p-4">
                    <div class="relative overflow-x-hidden rounded-2xl">
                        <div class="flex h-40 items-center justify-center bg-gray-100">
                            <img class="h-16 w-16" src="{{ asset('img/plant.png') }}">
                            <img class="h-16 w-16" src="{{ asset('img/plant.png') }}">
                            <img class="h-16 w-16" src="{{ asset('img/plant.png') }}">
                        </div>
                        <p class="group absolute right-2 top-2 cursor-pointer rounded-full bg-white p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 opacity-70 group-hover:opacity-50"
                                fill="none" viewBox="0 0 24 24" stroke="black">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </p>
                    </div>
                    <div class="mt-4 mb-2 flex justify-between pl-2">
                        <div>
                            <p class="mb-0 text-lg font-semibold text-gray-900">50 x Seedball</p>
                            <p class="text-md mt-0 text-gray-800">$300.00</p>
                        </div>
                        <div class="group mb-1 mr-4 flex cursor-pointer flex-col-reverse">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:opacity-70"
                                fill="none" viewBox="0 0 24 24" stroke="gray">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="rounded-md bg-white p-4">
                    <div class="relative overflow-x-hidden rounded-2xl">
                        <div class="flex h-40 items-center justify-center bg-gray-100">
                            <img class="h-12 w-12" src="{{ asset('img/plant.png') }}">
                            <img class="h-12 w-12" src="{{ asset('img/plant.png') }}">
                            <img class="h-12 w-12" src="{{ asset('img/plant.png') }}">
                            <img class="h-12 w-12" src="{{ asset('img/plant.png') }}">
                        </div>
                        <p class="group absolute right-2 top-2 cursor-pointer rounded-full bg-white p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 opacity-70 group-hover:opacity-50"
                                fill="none" viewBox="0 0 24 24" stroke="black">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </p>
                    </div>
                    <div class="mt-4 mb-2 flex justify-between pl-2">
                        <div>
                            <p class="mb-0 text-lg font-semibold text-gray-900">100 x Seedball</p>
                            <p class="text-md mt-0 text-gray-800">$600.00</p>
                        </div>
                        <div class="group mb-1 mr-4 flex cursor-pointer flex-col-reverse">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:opacity-70"
                                fill="none" viewBox="0 0 24 24" stroke="gray">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    @livewireScripts
</body>

</html>
