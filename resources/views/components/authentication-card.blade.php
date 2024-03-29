<div class="flex flex-col items-center min-h-screen pt-6 pb-8 bg-gray-100 sm:justify-center sm:pt-8">
    @isset($logo)
    <div>
        {{ $logo }}
    </div>
    @endisset

    @isset($extraTop)
    {{ $extraTop }}
    @endisset

    <div class="w-full px-8 py-4 mt-6 overflow-hidden bg-white shadow-md sm:px-8 sm:py-8 sm:max-w-md sm:rounded-xl">
        {{ $slot }}
    </div>
</div>
