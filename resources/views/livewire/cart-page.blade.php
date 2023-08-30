<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

        <h1 class="text-4xl font-bold">The simplest method to <br>neutralize your carbon.</h1>

        <div>
            <form wire:submit="create">
                {{ $this->form }}
                
                <button type="submit">
                    Submit
                </button>
            </form>

            <x-filament-actions::modals />
        </div>
    </div>

</div>