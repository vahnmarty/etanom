<div class="py-12">
    <div class="max-w-6xl px-8 mx-auto">
        
        <h1 class="text-3xl font-bold text-center">Funder-Farmer Matchmaking</h1>

        <div class="grid gap-16 mt-16 lg:grid-cols-2">

            <div>
                <div class="w-full px-6 py-3 bg-green-300 rounded-md lg:w-64">
                    <h3 class="font-bold text-green-900">Your Planters</h3>
                </div>

                <div class="mt-8 ">
                    @foreach($planters as $p => $planter)
                    <div class="flex justify-between p-4 border rounded-md">
                        <div class="flex gap-3 rounded-md">
                            <img src="{{ asset('img/farmer.png') }}" class="flex-shrink-0 w-auto h-12" alt="">
                            <div>
                                <p class="text-lg font-bold">{{ $planter->name }}</p>
    
                                <div class="flex items-center">
                                    @foreach(range(1,5) as $star)
                                    <x-heroicon-s-star class="w-4 h-4 text-normal-green"/>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <button type="button" class="block px-8 py-1 text-sm font-semibold text-white rounded-lg bg-primary-orange hover:bg-gray-900">
                            Select
                        </button>
                    </div>
                    @endforeach
                </div>

            </div>

            <div>
                <div class="w-full px-6 py-3 bg-green-300 rounded-md lg:w-64">
                    <h3 class="font-bold text-green-900">Your Requests</h3>
                </div>
    
    
                <div class="px-3 mt-8">
                    @foreach($cart->items as $i => $item)
                    <div class="flex items-center gap-3 rounded-md">
                        <img src="{{ asset('img/plants/thumbnail.jpg') }}" class="flex-shrink-0 w-auto h-8" alt="">
                        <p>{{ $item->plant->name }}</p>
                    </div>
                    @endforeach
                </div>
            </div>

            
        </div>

    </div>
</div>