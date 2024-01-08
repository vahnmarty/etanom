<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
 
        <meta name="application-name" content="{{ config('app.name') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
 
        <style>
            html,body{
                font-family: 'Poppins', sans-serif;
            }
            
            [x-cloak] {
                display: none !important;
            }
        </style>
 
        @filamentStyles
        @vite('resources/css/app.css')
        @stack('head-scripts')
    </head>
 
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-white dark:bg-gray-900">
            <div class="flex">
                <aside class="w-0 min-h-screen overflow-hidden transition-all ease-in-out bg-green-900 md:w-80">
                    <div class="px-8 py-8">
                        <a href="">
                            <img src="{{ asset('img/logo-white.png') }}" class="w-full h-9">
                        </a>
                    </div>
                    <div>
                        <div class="px-8 space-y-1">
                            <a href="{{ url('dashboard') }}" class="flex w-full gap-4 px-8 py-4 text-gray-100 rounded-md hover:text-white hover:bg-green-700 {{ request()->is('dashboard*') ? 'bg-green-700 hover:bg-green-800' : '' }}">
                                <x-heroicon-s-squares-2x2 class="flex-shrink-0 w-5 h-5" />
                                <strong>Home</strong>
                            </a>
                            <a href="{{ url('planter/orders') }}" class="flex w-full gap-4 px-8 py-4 text-gray-100 rounded-md hover:text-white hover:bg-green-700 {{ request()->is('planter/orders*') ? 'bg-green-700 hover:bg-green-800' : '' }}">
                                <x-heroicon-o-chart-bar-square class="flex-shrink-0 w-5 h-5" />
                                <strong>Orders</strong>
                            </a>
                            <a href="{{ url('planter/inventory') }}" class="flex w-full gap-4 px-8 py-4 text-gray-100 rounded-md hover:text-white hover:bg-green-700 {{ request()->is('planter/inventory*') ? 'bg-green-700 hover:bg-green-800' : '' }}">
                                <x-heroicon-o-cube class="flex-shrink-0 w-5 h-5" />
                                <strong>Inventory</strong>
                            </a>
                            <a href="{{ url('planter/reports') }}" class="flex w-full gap-4 px-8 py-4 text-gray-100 rounded-md hover:text-white hover:bg-green-700 {{ request()->is('planter/reports*') ? 'bg-green-700 hover:bg-green-800' : '' }}">
                                <x-heroicon-o-chart-bar-square class="flex-shrink-0 w-5 h-5" />
                                <strong>Reports</strong>
                            </a>
                        </div>
                    </div>
                </aside>
                <aside class="flex-1">
                    <div class="px-4 py-3 border-b shadow-sm sm:px-6 lg:py-6 lg:px-16">
                        <div class="flex justify-between">
                            <div class="flex items-center gap-6">
                               <a href="{{ url('dashboard') }}" class="lg:hidden">
                                    <img src="{{ asset('img/logo-green.png') }}" class="w-auto h-8" alt="">
                               </a>
                            </div>
                            <div class="flex items-center gap-6">
                                <a href="#" class="text-normal-green">
                                    <x-heroicon-o-question-mark-circle class="flex-shrink-0 w-7 h-7"/>
                                </a>
                                <a href="#" class="relative text-normal-green">
                                    <x-heroicon-o-shopping-cart class="flex-shrink-0 w-7 h-7"/>
                                    <div class="absolute bottom-0 -right-1 w-4 h-4 text-[9px] text-center flex justify-center items-center text-white bg-red-500 rounded-full">16</div>
                                </a>
                                <a href="#" class="text-normal-green">
                                    <x-heroicon-o-bell-alert class="flex-shrink-0 w-7 h-7"/>
                                </a>
                                <x-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <button type="button" class="block text-normal-green">
                                            <x-heroicon-o-user-circle class="flex-shrink-0 w-7 h-7"/>
                                        </button>
                                    </x-slot>
                    
                                    <x-slot name="content">
                                        <x-dropdown-link :href="route('profile.edit')">
                                            {{ __('Profile') }}
                                        </x-dropdown-link>
                    
                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                    
                                            <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
                                    </x-slot>
                                </x-dropdown>
                            </div>
                        </div>
                    </div>
                    <main>
                        @yield('content') {{ $slot ?? '' }}
                    </main>
                </aside>
            </div>
        </div>

        @filamentScripts
        @vite('resources/js/app.js')
        @stack('after-scripts')
    </body>

</html>
