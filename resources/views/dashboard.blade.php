<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-16">

            <section class="flex justify-between mb-8">
                
                <div class="flex self-center gap-6">
                    <img src="{{ asset('img/avatar.jpeg') }}" class="w-24 h-24 rounded-full" alt="">
                    <div>
                        <p class="text-xl font-bold text-normal-green">Good Morning, </p>
                        <h3 class="mt-2 text-5xl font-bold text-gray-900">{{ Auth::user()->name }}</h3>
                    </div>
                </div>

                <div class="grid grid-cols-3 gap-3">
                    <div class="p-8 text-white bg-blue-500 rounded-md">
                        <div class="flex gap-3">
                            <h2 class="text-5xl font-extrabold">0</h2>
                            <div>
                                <p class="text-xl font-bold">seedballs</p>
                                <p class="">purchased</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-8 text-white bg-green-500 rounded-md">
                        <div class="flex gap-3">
                            <h2 class="text-5xl font-extrabold">0</h2>
                            <div>
                                <p class="text-xl font-bold">seedballs</p>
                                <p class="">planted</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-8 text-white rounded-md bg-fuchsia-500">
                        <div class="flex gap-3">
                            <h2 class="text-5xl font-extrabold">12</h2>
                            <div>
                                <p class="text-xl font-bold">tons</p>
                                <p class="">CO<sub>2</sub> offset </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="flex items-center mt-12 bg-white">
                <div class="flex-1 border-t-2 border-light-green"></div>
                <div class="flex items-center justify-center w-40 mx-auto">
                    <x-heroicon-o-cloud class="block w-24 h-24 bg-white text-normal-green"/>
                </div>
                <div class="flex-1 border-t-2 border-light-green"></div>
            </div>

            <section class="mt-8">
                <div class="grid grid-cols-2 lg:grid-cols-4 lg:gap-4">

                    <div class="border-2 border-gray-200 rounded-sm shadow-sm">
                        <img src="{{ asset('img/feature-1.png') }}" class="object-cover w-full h-48 rounded-t-sm" alt="">
                        <div class="px-4 py-4 space-y-2">
                            <p class="text-xs text-gray-600">{{ date('M d, Y') }}</p>
                            <h3 class="font-bold text-normal-green">Team Galansiyang releases 3,000 seedballs at Mt. Kalatungan</h3>
                        </div>
                    </div>

                    <div class="border-2 border-gray-200 rounded-sm shadow-sm">
                        <img src="{{ asset('img/feature-2.png') }}" class="object-cover w-full h-48 rounded-t-sm" alt="">
                        <div class="px-4 py-4 space-y-2">
                            <p class="text-xs text-gray-600">{{ date('M d, Y') }}</p>
                            <h3 class="font-bold text-normal-green">SikaiPH introduces "LANTAWA"</h3>
                        </div>
                    </div>

                    <div class="border-2 border-gray-200 rounded-sm shadow-sm">
                        <img src="{{ asset('img/feature-3.jpg') }}" class="object-cover w-full h-48 rounded-t-sm" alt="">
                        <div class="px-4 py-4 space-y-2">
                            <p class="text-xs text-gray-600">{{ date('M d, Y') }}</p>
                            <h3 class="font-bold text-normal-green">Etanom and Surigao Kids Plant 2000 Seedballs for a Greener Tomorrow</h3>
                        </div>
                    </div>

                    <div class="border-2 border-gray-200 rounded-sm shadow-sm">
                        <img src="{{ asset('img/feature-4.jpg') }}" class="object-cover w-full h-48 rounded-t-sm" alt="">
                        <div class="px-4 py-4 space-y-2">
                            <p class="text-xs text-gray-600">{{ date('M d, Y') }}</p>
                            <h3 class="font-bold text-normal-green">The Manubo Tribe and Kalatungan Mandum Tribal Community</h3>
                        </div>
                    </div>

                </div>
            </section>



        </div>
    </div>
</x-app-layout>
