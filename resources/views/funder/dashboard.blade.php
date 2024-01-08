@extends('components.layouts.funder')

@section('content')
<div class="py-12">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-16">

        <section class="flex justify-between gap-3 mb-8">
            
            <div class="flex self-center gap-3 md:gap-6">
                <img src="{{ asset('img/avatar.jpeg') }}" class="w-20 h-20 rounded-full md:w-24 md:h-24" alt="">
                <div>
                    <p class="text-base font-bold md:text-xl text-normal-green">Good Morning, </p>
                    <h3 class="text-xl font-bold text-gray-900 md:mt-2 md:text-5xl">{{ Auth::user()->name }}</h3>
                </div>
            </div>

            <div class="grid justify-end grid-cols-2 gap-3 md:grid-cols-3">
                <div class="p-3 text-white bg-blue-500 rounded-md lg:p-8">
                    <div class="flex gap-3">
                        <h2 class="flex-shrink-0 w-10 text-lg font-extrabold md:text-xl lg:text-3xl">{{ rand(1, 28) }}</h2>
                        <div>
                            <p class="text-sm font-bold lg:text-lg">seedballs</p>
                            <p class="text-xs">purchased</p>
                        </div>
                    </div>
                </div>
                <div class="p-3 text-white bg-green-500 rounded-md lg:p-8">
                    <div class="flex gap-3">
                        <h2 class="flex-shrink-0 w-10 text-lg font-extrabold md:text-xl lg:text-3xl">{{ rand(5, 15) }}</h2>
                        <div>
                            <p class="text-sm font-bold lg:text-lg">seedballs</p>
                            <p class="text-xs">planted</p>
                        </div>
                    </div>
                </div>
                <div class="hidden p-3 text-white rounded-md lg:p-8 bg-fuchsia-500 md:block">
                    <div class="flex gap-3">
                        <h2 class="flex-shrink-0 w-10 text-lg font-extrabold md:text-xl lg:text-3xl">12</h2>
                        <div>
                            <p class="text-sm font-bold lg:text-lg">tons</p>
                            <p class="text-xs">CO<sub>2</sub> offset </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="flex items-center mt-12 bg-white">
            <div class="flex-1 border-t-2 border-light-green"></div>
            <div class="flex items-center justify-center w-40 mx-auto">
                <img src="{{ asset('img/icon-color.png') }}" class="w-16 h-16" alt="">
            </div>
            <div class="flex-1 border-t-2 border-light-green"></div>
        </div>

        <section class="mt-8">
            <div class="grid grid-cols-3 gap-3 lg:grid-cols-4 lg:gap-4">

                <div class="border-2 border-gray-200 rounded-sm shadow-sm">
                    <img src="{{ asset('img/feature-1.png') }}" class="object-cover w-full h-24 rounded-t-sm md:h-48" alt="">
                    <div class="px-2 py-2 space-y-1 lg:px-4 lg:py-4 lg:space-y-2">
                        <p class="text-xs text-gray-600">{{ date('M d, Y') }}</p>
                        <h3 class="text-xs font-bold md:text-base text-normal-green">Team Galansiyang releases 3,000 seedballs at Mt. Kalatungan</h3>
                    </div>
                </div>

                <div class="border-2 border-gray-200 rounded-sm shadow-sm">
                    <img src="{{ asset('img/feature-2.png') }}" class="object-cover w-full h-24 rounded-t-sm md:h-48" alt="">
                    <div class="px-2 py-2 space-y-1 lg:px-4 lg:py-4 lg:space-y-2">
                        <p class="text-xs text-gray-600">{{ date('M d, Y') }}</p>
                        <h3 class="text-xs font-bold md:text-base text-normal-green">SikaiPH introduces "LANTAWA"</h3>
                    </div>
                </div>

                <div class="border-2 border-gray-200 rounded-sm shadow-sm">
                    <img src="{{ asset('img/feature-3.jpg') }}" class="object-cover w-full h-24 rounded-t-sm md:h-48" alt="">
                    <div class="px-2 py-2 space-y-1 lg:px-4 lg:py-4 lg:space-y-2">
                        <p class="text-xs text-gray-600">{{ date('M d, Y') }}</p>
                        <h3 class="text-xs font-bold md:text-base text-normal-green">Etanom and Surigao Kids Plant 2000 Seedballs for a Greener Tomorrow</h3>
                    </div>
                </div>

                <div class="border-2 border-gray-200 rounded-sm shadow-sm">
                    <img src="{{ asset('img/feature-4.jpg') }}" class="object-cover w-full h-24 rounded-t-sm md:h-48" alt="">
                    <div class="px-2 py-2 space-y-1 lg:px-4 lg:py-4 lg:space-y-2">
                        <p class="text-xs text-gray-600">{{ date('M d, Y') }}</p>
                        <h3 class="text-xs font-bold md:text-base text-normal-green">The Manubo Tribe and Kalatungan Mandum Tribal Community</h3>
                    </div>
                </div>

            </div>
        </section>



    </div>
</div>
@endsection
