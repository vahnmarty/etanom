<div class="py-12">
    <div class="max-w-5xl px-4 mx-auto lg:px-8">
        <h1 class="text-3xl font-bold text-center">Choose and plant your trees</h1>
        
    </div>

    <div class="max-w-6xl px-4 mx-auto mt-8 lg:px-8">
        
        <div class="grid grid-cols-2 gap-6 lg:grid-cols-3">

            @foreach($plants as $i => $plant)
            <div class="p-3 border rounded-lg shadow-md lg:p-5">
                <div class="flex gap-3">
                    <img src="{{ asset('img/plants/' . $plant->thumbnail) }}" class="flex-shrink-0 w-auto h-10 lg:h-16" alt="">
                    <div>
                        <h3 class="text-lg font-bold text-gray-900">{{ $plant->name }}</h3>
                        <p class="hidden text-xs lg:block">{{ $plant->description }}</p>
                        <div class="items-center justify-between lg:flex">
                            <p class="mt-2 text-2xl">
                                {{ config('settings.seedball.symbol')}}
                                {{ number_format($plant->minimum_price) . '-' . number_format($plant->maximum_price) }}
                            </p>
                            <button type="button" wire:click="addToCart({{ $plant->id }})" class="flex items-center justify-center w-8 h-8 mt-3 transition-all rounded-full bg-normal-green hover:bg-green-900">
                                <x-heroicon-o-shopping-cart class="w-5 h-5 text-white"/>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
