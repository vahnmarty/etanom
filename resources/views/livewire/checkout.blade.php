<div class="py-12">
    <div class="sm:px-6 lg:px-16">

        <h1 class="text-3xl font-bold">
            Checkout
        </h1>

        <div class="max-w-lg py-16">
            <form wire:submit.prevent="checkout">
                {{ $this->form }}

                <div class="mt-8">
                    <button type="submit" class="inline-flex items-center justify-center w-full gap-2 px-8 py-3 text-lg text-white border border-transparent rounded-md shadow-md bg-normal-green hover:bg-normal-green/90 ">Checkout</button>
                </div>
            </form>
        </div>
    </div>
</div>