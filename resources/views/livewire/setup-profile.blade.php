<div class="py-16">
    <div class="max-w-5xl px-8 mx-auto">

        <div class="flex">

            <div class="px-20">
                <nav aria-label="Progress">
                    <ol role="list" class="overflow-hidden">
                        <li class="relative pb-24">
                            <div 
                                :class="$wire.step >= 2 ? 'bg-normal-green ' : 'bg-gray-500'"
                                class="absolute left-4 top-4 -ml-px mt-0.5 h-full w-0.5" aria-hidden="true">
                            </div>
                            <!-- Complete Step -->
                            <a href="#" class="relative flex items-start group">
                                <span class="flex items-center h-9">
                                    <span
                                        class="relative z-10 flex items-center justify-center w-8 h-8 text-white rounded-full bg-normal-green group-hover:bg-light-green">
                                        1
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li class="relative pb-24">
                            <div class="absolute left-4 top-4 -ml-px mt-0.5 h-full w-0.5 bg-gray-300"
                                aria-hidden="true"></div>
                            <!-- Current Step -->
                            <a href="#" class="relative flex items-start group" aria-current="step">
                                <span class="flex items-center h-9" aria-hidden="true">
                                    <span
                                        :class="$wire.step >= 2 ? 'bg-normal-green border-normal-green text-white ' : 'bg-gray-500 border-gray-500 text-gray-200 '"
                                        class="relative z-10 flex items-center justify-center w-8 h-8 border-2 rounded-full">
                                        2
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li class="relative">
                            <!-- Upcoming Step -->
                            <a href="#" class="relative flex items-start group">
                                <span class="flex items-center h-9" aria-hidden="true">
                                    <span
                                        class="relative z-10 flex items-center justify-center w-8 h-8 text-gray-200 bg-gray-500 border-2 border-gray-500 rounded-full">
                                        3
                                    </span>
                                </span>
                            </a>
                        </li>
                    </ol>
                </nav>

            </div>

            <div class="px-20">
                
                <div>

                    <div id="step1" x-show="$wire.step === 1">

                        <p class="font-bold text-gray-500">Step 1</p>
    
                        <h3 class="mt-8 text-3xl font-bold">Calculate your <span class="text-red-600">Carbon Footprint</span>.</h3>
                        <p class="mt-4">
                            Use our intuitive calculator to find out how much CO₂ you emit.    
                        </p>
    
                        <div class="mt-8">
                            <div class="inline-block p-10 border-2 rounded-md border-normal-green">
                                <h3 class="text-5xl font-bold text-center text-gray-600">2.67</h3>
                                <div class="mt-4">
                                    <p>tons of CO<sub>2</sub> per year </p>
                                </div>
                            </div>
                        </div>
    
                        <div class="mt-8">
                            <button type="button"
                                wire:click="next(2)"
                                class="inline-block px-6 py-3 mx-auto mt-6 text-sm font-semibold text-white uppercase rounded-md bg-normal-green hover:bg-gray-900 md:inline-flex">Next</button>
                        </div>
                    </div>

                    <div id="step2" x-show="$wire.step === 2" x-cloak>

                        <p class="font-bold text-gray-500">Step 2</p>
    
                        <h3 class="mt-8 text-3xl font-bold">Buy your first <span class="text-normal-green">Seedball</span>.</h3>
                        <p class="mt-4">
                            For only <span>{{ \App\Models\Seedball::displayPrice() }}</span>, you can now contribute to reforestation.
                        </p>
    
                        <div class="mt-8">
                            <div class="inline-block p-10 border-2 rounded-md border-normal-green">
                                <h3 class="text-5xl font-bold text-center text-gray-600">{{ \App\Models\Seedball::displayPrice() }}</h3>
                                <div class="mt-4">
                                    <p class="text-center">1x seedball </p>
                                </div>
                            </div>
                        </div>
    
                        <div class="mt-8">
                            <button type="button"
                                wire:click="checkout"
                                class="inline-block px-6 py-3 mx-auto mt-6 text-sm font-semibold text-white uppercase rounded-md bg-normal-green hover:bg-gray-900 md:inline-flex">Checkout</button>
                        </div>
                    </div>

                    <div id="step3" x-show="$wire.step === 3" x-cloak>

                        <p class="font-bold text-gray-500">Step 3</p>
    
                        <h3 class="mt-8 text-3xl font-bold">Monitor your <span class="text-purple-700">Progress</span>.</h3>
                        <p class="mt-4">
                            Keep track of where you money goes, and your environmental impact.
                        </p>
    
                        <div class="mt-8">
                            <img src="{{ asset('img/dashboard.png') }}" alt="" class="w-32 h-32 mx-auto">
                        </div>
    
                        <div class="flex justify-center mt-8">
                            <a href="{{ url('dashboard') }}"
                                class="inline-block px-6 py-3 mx-auto mt-6 text-sm font-semibold text-white uppercase rounded-md bg-normal-green hover:bg-gray-900 md:inline-flex">Continue</a>
                        </div>
                    </div>

                </div>
                
                
            </div>
        </div>
    </div>
</div>
