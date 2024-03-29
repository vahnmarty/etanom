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
                <aside class="flex-1">
                    @include('includes.app-header')
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
