<div class="py-12">
    
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-16">

        <div class="flex justify-center">
            <x-heroicon-s-check-circle class="flex-shrink-0 w-64 h-64 text-normal-green"/>
        </div>

        <div class="text-center">
            <h3 class="font-bold uppercase">Thank you</h3>
            <h1 class="mt-3 text-3xl font-bold text-normal-green">
                Your Order is Confirmed
             </h1>
            <p class="mt-3">Order Reference: <strong>{{ $order->code }}</strong></p>
        </div>
        

        <div class="mt-8">
            {{ $this->table }}
        </div>
    </div>
</div>