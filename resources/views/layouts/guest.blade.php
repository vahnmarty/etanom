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
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body class="font-sans antialiased text-gray-900">
        
        {{ $slot ?? ''}}
        @yield('content')

        <footer class="text-white bg-gray-900">
            <div class="max-w-6xl px-4 py-16 mx-auto sm:px-6"> 
                <div class="grid grid-cols-2">
                    <div class="pr-8">
                        <a href="#">
                            <img src="{{ url('img/logo.svg') }}" class="w-auto h-10" alt="">
                        </a>
                        <p class="mt-6">We plant and nurture forests for you</p>
                    </div>
                    <div class="grid grid-cols-3 gap-6">
                        <div>
                            <h6 class="font-bold text-light-green">Explore</h6>
    
                            <div class="mt-4 space-y-2">
                                <a href="" class="block">About Us</a>
                                <a href="" class="block">Our Approach</a>
                                <a href="" class="block">FAQ</a>
                                <a href="" class="block">Contact Us</a>
                            </div>
                        </div>
                        <div>
                            <h6 class="font-bold text-light-green">Follow Us</h6>
    
                            <div class="mt-4 space-y-2">
                                <a href="" class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="flex-shrink-0 w-4 h-4">
                                        <path stroke-linecap="round" d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25" />
                                      </svg>
                                    <span>Facebook</span>
                                </a>
                                <a href="" class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="flex-shrink-0 w-4 h-4">
                                        <path stroke-linecap="round" d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25" />
                                      </svg>
                                    <span>Twitter</span>
                                </a>
                                <a href="" class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="flex-shrink-0 w-4 h-4">
                                        <path stroke-linecap="round" d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25" />
                                      </svg>
                                    <span>LinkedIn</span>
                                </a>
                            </div>
                        </div>

                        <div>
                            <h6 class="font-bold text-light-green">Newsletter</h6>
    
                            <form class="mt-4 space-y-2">
                                <input type="email" class="h-8 text-sm text-center placeholder-white bg-transparent border border-white rounded-md" placeholder="Email">
                                <input type="text" class="h-8 text-sm text-center placeholder-white bg-transparent border border-white rounded-md" placeholder="Name">
                                <button type="submit" class="btn-primary">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </footer>
        @livewireScripts
    </body>
</html>
