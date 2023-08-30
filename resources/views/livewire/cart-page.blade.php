<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

        <h1 class="text-4xl font-bold">The simplest method to <br>neutralize your carbon.</h1>

        <div class="grid grid-cols-2 gap-8 mt-8">
            <form wire:submit="create">
                {{ $this->form }}

                <button type="submit" class="block w-full px-8 py-2 mt-8 text-xl font-medium text-center text-white border border-transparent rounded-md shadow-sm bg-green-600/90 hover:bg-green-500/80">
                    Plant {{ $data['amount'] }} Tree
                </button>
                
                <p class="mt-8 font-bold text-gray-700">Your purchase will support:</p>
                <p class="text-gray-700">Reforestation package using seedballs bio technology and drones.</p>
                
            </form>

            <x-filament-actions::modals />
        </div>
    </div>

</div>