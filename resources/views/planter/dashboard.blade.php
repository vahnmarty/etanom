@extends('components.layouts.planter')

@section('content')
    <div class="py-12">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-16">

            <section class="p-4 text-white rounded-lg bg-normal-green">
                <div class="flex justify-between">
                    <div>
                        <p class="text-sm font-bold text-green-50">Earnings</p>
                        <h3 class="mt-2 text-3xl font-bold text-white">
                            ₱{{ number_format(rand(5000, 25000), 2) }}
                        </h3>
                    </div>
                    <div>
                        <button type="button"
                            class="inline-block px-8 py-3 mx-auto mt-6 text-sm font-semibold rounded-lg bg-white/90 text-primary-orange hover:bg-white md:inline-flex">Withdraw</button>
                    </div>
                </div>
            </section>

            <section class="grid grid-cols-3 gap-2 mt-8">
                <div class="p-3 border-2 border-gray-200 rounded-md">
                    <h3 class="text-2xl font-bold text-normal-green">{{ rand(100, 700) }}</h3>
                    <p class="text-sm font-semibold text-gray-700">Planted</p>
                </div>
                <div class="p-3 border-2 border-gray-200 rounded-md">
                    <h3 class="text-2xl font-bold text-normal-green">{{ rand(100, 700) }}</h3>
                    <p class="text-sm font-semibold text-gray-700">Planting</p>
                </div>
                <div class="p-3 border-2 border-gray-200 rounded-md">
                    <h3 class="text-2xl font-bold text-normal-green">{{ rand(100, 700) }}</h3>
                    <p class="text-sm font-semibold text-gray-700">Orders</p>
                </div>
            </section>

            <div class="grid-cols-2 gap-8 lg:grid">
                <section class="mt-8">
                    <div class="flex items-end justify-between">
                        <p class="font-bold">Recent Orders</p>
                        <a href="" class="text-sm font-bold">View All</a>
                    </div>
                    <div class="mt-8 space-y-3">
                        @foreach (range(1, 3) as $order)
                            <div class="flex items-center justify-between gap-3 p-2 border border-gray-300 rounded-md">
                                <img src="{{ asset('img/plant.png') }}" class="flex-shrink-0 w-8 h-8" alt="">
                                <p class="font-bold">Plant {{ $order }}</p>
                                <div>
                                    <div class="px-3 py-1 text-xs text-indigo-700 bg-indigo-300 rounded-md">Processing</div>
                                </div>
                                <div>
                                    <a href="">
                                        <x-heroicon-s-ellipsis-horizontal class="text-gray-600 h-7 w-7" />
                                    </a>
                                </div>
                            </div>
                        @endforeach
                        @foreach (range(4, 7) as $order)
                            <div class="flex items-center justify-between gap-3 p-2 border border-gray-300 rounded-md">
                                <img src="{{ asset('img/plant.png') }}" class="flex-shrink-0 w-8 h-8" alt="">
                                <p class="font-bold">Plant B{{ $order }}</p>
                                <div>
                                    <div class="px-3 py-1 text-xs text-green-300 rounded-md bg-normal-green">Completed</div>
                                </div>
                                <div>
                                    <a href="">
                                        <x-heroicon-s-ellipsis-horizontal class="text-gray-600 h-7 w-7" />
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            </div>

            <div class="flex items-center mt-12 bg-white">
                <div class="flex-1 border-t-2 border-light-green"></div>
                <div class="flex items-center justify-center w-40 mx-auto">
                    <img src="{{ asset('img/icon-color.png') }}" class="w-16 h-16" alt="">
                </div>
                <div class="flex-1 border-t-2 border-light-green"></div>
            </div>




        </div>
    </div>
@endsection
