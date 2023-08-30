<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
 
        <meta name="application-name" content="{{ config('app.name') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <title>{{ config('app.name') }}</title>
 
        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>
 
        @filamentStyles
        @vite('resources/css/app.css')
    </head>
 
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <div class="bg-white lg:flex">

                @include('includes.sidebar')
        
                <div class="flex-1">
                    <main class="px-4 py-3 lg:px-16 lg:py-6">
                        {{ $slot }}
                    </main>
                </div>
            </div>
        </div>


        @filamentScripts
        @vite('resources/js/app.js')
    </body>

</html>
