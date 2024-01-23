<div class="h-screen px-8 py-8 bg-gray-100">

    <div wire:loading.delay.longest
        class="fixed inset-0 z-50 bg-white">

        <div class="py-32 lg:max-w-5xl lg:mx-auto">
            <div class="text-center">
                <h2 class="text-2xl font-bold text-gray-600">Finding you a Planter</h2>

                <div class="mt-16">
                    <div class="relative flex items-center justify-center w-20 mx-auto">
                        <img src="{{ asset('img/ellipse.png') }}" class="w-20 h-20 animate-spin" alt="">
                        <img src="{{ asset('img/icon-color.png') }}" class="absolute w-8 h-8" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lg:max-w-5xl lg:mx-auto">
        
        <section x-show="$wire.trees_open">
            <div class="relative lg:w-96">
                <input type="search" 
                    class="block w-full pl-10 border border-gray-300 rounded-md"
                    placeholder="What tree do you want to plant?">
                <div class="absolute left-2 top-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                      </svg>
                </div>
                      
            </div>
        
            <div class="grid grid-cols-2 gap-4 mt-8 lg:grid-cols-4 lg:gap-8">
        
                <div wire:click="select('narra')" class="shadow-lg cursor-pointer rounded-xl">
                    <div class="p-4 bg-green-300 hover:bg-green-500 rounded-t-xl">
                        <img src="{{ asset('img/plants/narra.png') }}" class="w-auto h-32 mx-auto" alt="">
                    </div>
                    <div class="p-3">
                        <p>Narra Tree</p>
                        <p class="mt-2 text-orange-600">P100.00</p>
                    </div>
                </div>
        
                <div wire:click="select('talisay')" class="shadow-lg rounded-xl">
                    <div class="p-4 bg-green-300 rounded-t-xl hover:bg-green-500">
                        <img src="{{ asset('img/plants/talisay.png') }}" class="w-auto h-32 mx-auto" alt="">
                    </div>
                    <div class="p-3">
                        <p>Talisay Tree</p>
                        <p class="mt-2 text-orange-600">P120.00</p>
                    </div>
                </div>
        
            </div>
        </section>

        <section x-show="$wire.show_planter">
            
        </section>
    </div>
</div>
