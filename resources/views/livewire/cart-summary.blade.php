<div class="px-6 py-6">
    <h3 class="font-bold">Cart</h3>

    <div class="mt-8 space-y-1">
        @foreach($cart->items as $i => $item)
        <div class="flex items-center gap-3 rounded-md">
            <img src="{{ asset('img/plants/thumbnail.jpg') }}" class="flex-shrink-0 w-auto h-8" alt="">
            <p>{{ $item->plant->name }}</p>
        </div>
        @endforeach
    </div>

    <div class="mt-8">
        <a href="{{ url('find-match') }}" class="block px-8 py-3 text-sm font-semibold text-center text-white rounded-lg bg-primary-orange hover:bg-gray-900">
            Continue
        </a>
    </div>
</div>
