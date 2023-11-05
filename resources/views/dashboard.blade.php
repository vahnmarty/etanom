<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-16">


            <div class="p-8 text-white bg-orange-400 shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="flex items-center gap-4">
                    <x-heroicon-s-user-circle class="flex-shrink-0 w-24 h-24 text-white"/>
                    <div class="pt">
                        <h3 class="text-4xl font-bold">{{ Auth::user()->name }}</h3>
                        <p class="text-xl">{{ Auth::user()->email }}</p>
                    </div>
                </div>
            </div>

            <div class="grid gap-8 mt-8 lg:grid-cols-2 xl:grid-cols-3">

                <div>
                    <h4 class="text-2xl font-bold text-gray-900 ">
                        Reforestation Package
                    </h4>
                    <div class="p-8 mt-8 text-white bg-green-500 rounded-md">
                        <div class="flex gap-3">
                            <h2 class="font-extrabold text-7xl">1</h2>
                            <div>
                                <p class="text-3xl font-bold">purchase</p>
                                <p class="text-lg font-bold">completed</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <h4 class="text-2xl font-bold text-gray-900 ">
                        Estimated Carbon
                    </h4>
                    <div class="p-8 mt-8 text-white rounded-md shadow-md bg-fuchsia-400 ">
                        <div class="flex gap-3">
                            <h2 class="font-extrabold text-7xl">12</h2>
                            <div>
                                <p class="text-3xl font-bold">tons</p>
                                <p class="text-lg font-bold">CO<sub>2</sub> offset </p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>


        </div>
    </div>
</x-app-layout>
