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
        
        <section x-show="$wire.show_trees">
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
        
                <div wire:click="selectTree('narra')" class="shadow-lg cursor-pointer rounded-xl">
                    <div class="p-4 bg-green-300 hover:bg-green-500 rounded-t-xl">
                        <img src="{{ asset('img/plants/narra.png') }}" class="w-auto h-32 mx-auto" alt="">
                    </div>
                    <div class="p-3">
                        <p>Narra Tree</p>
                        <p class="mt-2 text-orange-600">P100.00</p>
                    </div>
                </div>
        
                <div wire:click="selectTree('talisay')" class="shadow-lg rounded-xl">
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
            <div>
                <p class="text-gray-600">You have selected:</p>
                <h4 class="text-2xl font-bold uppercase text-normal-green">{{ $plant}}</h4>
            </div>

            <div class="p-8 mt-8 text-white rounded-lg shadow-md bg-normal-green">
                <p>We found 3 suitable planters to plant {{ $plant }} for you !</p>

                <div class="mt-8 space-y-4">
                    @foreach(range(1, 4) as $planter)
                    <div wire:click="selectPlanter({{ $planter }})"
                        class="flex gap-4 p-4 text-gray-600 bg-gray-100 border rounded-md shadow-sm cursor-pointer">
                        <img src="{{ asset('img/avatar.png') }}" class="flex-shrink-0">
                        <div class="flex-1">
                            <p class="text-gray-700">Planter {{ $planter }}</p>
                            <p class="text-sm">Location {{ $planter }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section x-show="$wire.show_cart" class="space-y-8">
            <div>
                <p class="text-gray-600">Your Plant:</p>
                <h4 class="text-2xl font-bold uppercase text-normal-green">{{ $plant}}</h4>
            </div>
            <div>
                <p class="text-gray-600">Your Planter:</p>
                <h4 class="text-2xl font-bold uppercase text-normal-green">Planter {{ $planter }}</h4>
            </div>
            <div>
                <form action="">
                    <div>
                        <label for="">Enter number of tree(s)</label>
                        <input type="number" pattern="[0-9]*" wire:model="quantity" class="block w-full mt-1 text-center border border-gray-300 rounded-md">
                    </div>

                    <div class="pt-4 pb-4 mt-8 border-t border-gray-300 border-dashed">
                        <p class="font-bold text-gray-900">Summary</p>

                        <div class="mt-4 space-y-2">
                            <div class="flex justify-between">
                                <span>Subtotal</span>
                                <span>P350.00</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Transaction Fees</span>
                                <span>P25.00</span>
                            </div>
                            <div class="flex justify-between">
                                <span>VAT</span>
                                <span>P5.00</span>
                            </div>
                            
                            <div class="flex justify-between pt-4 border-t border-gray-300 border-dashed">
                                <span class="font-bold">TOTAL</span>
                                <span class="font-bold">P380.00</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <button type="submit" class="block w-full py-3 text-gray-100 rounded-md shadow-sm bg-normal-green">Checkout</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>
