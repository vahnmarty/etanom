<section>
    <div class="hidden lg:flex flex-col w-64 h-full min-h-[90vh] bg-gray-100 border-r">

        <div class="px-8 py-8">
            <ul class="space-y-3">
                <x-sidebar-item href="{{ route('dashboard') }}" :active="request()->is('dashboard')">
                    <x-slot name="icon">
                        <x-heroicon-s-squares-2x2 class="flex-shrink-0 w-5 h-5" />
                    </x-slot>
                    <strong>Home</strong>
                </x-sidebar-item>

                <x-sidebar-item href="{{ url('cart') }}" :active="request()->is('cart')">
                    <x-slot name="icon">
                        <x-heroicon-s-shopping-cart class="flex-shrink-0 w-5 h-5 text-yellow-500" />
                    </x-slot>
                    <strong>Purchase</strong>
                </x-sidebar-item>

                <x-sidebar-item href="{{ url('cart') }}" :active="request()->is('cart')">
                    <x-slot name="icon">
                        <x-heroicon-s-clock class="flex-shrink-0 w-5 h-5 text-green-500" />
                    </x-slot>
                    <strong>History</strong>
                </x-sidebar-item>

                <x-sidebar-item href="{{ url('cart') }}" :active="request()->is('cart')">
                    <x-slot name="icon">
                        <x-heroicon-s-academic-cap class="flex-shrink-0 w-5 h-5 text-purple-500" />
                    </x-slot>
                    <strong>Certificate</strong>
                </x-sidebar-item>
            </ul>
        </div>
    </div>
    <div x-data="{ open: false }" 
        x-on:open-menu.window="open = !open"
        x-transition
        :class="{ '-translate-x-[100vw]' : !open, 'translate-x-0' : open }"
        class="z-50 fixed inset-0 top-16 w-full min-h-screen -translate-x-[100vw] transition-all duration-300 ease-in-out bg-white lg:hidden">

        <div class="py-8">
            <ul>
                <x-sidebar-item href="{{ route('dashboard') }}" :active="request()->is('dashboard')">
                    <x-slot name="icon">
                        <x-heroicon-s-rectangle-group class="flex-shrink-0 w-4 h-4" />
                    </x-slot>
                    Home
                </x-sidebar-item>
            </ul>
        </div>

        
    </div>
</section>