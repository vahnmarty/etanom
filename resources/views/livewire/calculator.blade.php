<div class="max-w-5xl px-4 mx-auto sm:px-6">

    <div class="grid grid-cols-5 gap-6">
        <div></div>
        <div class="col-span-3">
            <div class="py-6">
                <h2 class="text-3xl font-bold">Carbon Emission Calculator</h2>
        
                <div class="mt-8 space-y-8">

                    @foreach($categories as $category)
                    <div class="p-8 border border-gray-300 rounded-md bg-gray-50">
                        <h3 class="text-xl font-bold text-orange-600">{{ $category['title'] }}</h3>
                        <p class="mt-2 text-sm">{{ $category['description'] }}</p>
        
                        <div x-data="{ option: null }"  class="mt-4 space-y-4">
                            @foreach($category['options'] as $option)
                            <label 
                                :class="option == `{{ $option['name'] }}` ? 'bg-light-green  border-transparent' :'' "
                                class="flex items-center justify-between px-4 py-2 duration-300 ease-in-out bg-white border-2 border-gray-300 rounded-md cursor-pointer hover:bg-light-green hover:border-light-green">
                                <input type="radio" x-model="option" wire:model="inputs.{{ $category['title'] }}" value="{{ $option['name'] }}" class="hidden">
                                <p class="font-bold text-gray-900">{{ $option['name'] }}</p>
                                <span class="text-sm text-gray-500"></span>
                            </label>
                            @endforeach
                        </div>
                          
                    </div>
                    @endforeach
                </div>

                <div class="flex justify-center mt-8">
                    <button type="button" wire:click="calculate" class="px-8 py-3 rounded-md bg-light-green hover:bg-light-green/90 lg:block">Calculate</button>
                </div>
               
            </div>
        </div>
        <div class="">
            @dump($inputs)
        </div>
    </div>
    
    
</div>