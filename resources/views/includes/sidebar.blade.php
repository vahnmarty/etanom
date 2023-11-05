<section class="hidden">
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

                <x-sidebar-item href="{{ url('cart') }}" :active="request()->is('history')">
                    <x-slot name="icon">
                        <x-heroicon-s-clock class="flex-shrink-0 w-5 h-5 text-green-500" />
                    </x-slot>
                    <strong>History</strong>
                </x-sidebar-item>

                <x-sidebar-item href="{{ url('cart') }}" :active="request()->is('certificate')">
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

<aside class="min-h-screen w-80 bg-normal-green">
    <div class="px-8 py-6">
        <a href="">
            <!-- <img src="" alt=""> -->
            <div class="text-3xl font-bold text-white">ETANOM</div>
        </a>
    </div>
    <div>
        <div class="px-8 space-y-1">
            <a href="{{ url('dashboard') }}" class="flex w-full gap-4 px-8 py-4 text-gray-100 bg-green-700 rounded-md hover:text-white hover:bg-green-800">
                <x-heroicon-s-squares-2x2 class="flex-shrink-0 w-5 h-5" />
                <strong>Home</strong>
            </a>
            <a href="{{ url('dashboard') }}" class="flex w-full gap-4 px-8 py-4 text-gray-100 rounded-md hover:text-white hover:bg-green-700">
                <x-heroicon-o-shopping-cart class="flex-shrink-0 w-5 h-5" />
                <strong>Purchase</strong>
            </a>
            <a href="{{ url('dashboard') }}" class="flex w-full gap-4 px-8 py-4 text-gray-100 rounded-md hover:text-white hover:bg-green-700">
                <x-heroicon-o-cube class="flex-shrink-0 w-5 h-5" />
                <strong>Inventory</strong>
            </a>
            <a href="{{ url('dashboard') }}" class="flex w-full gap-4 px-8 py-4 text-gray-100 rounded-md hover:text-white hover:bg-green-700">
                <x-heroicon-o-gift class="flex-shrink-0 w-5 h-5" />
                <strong>Gifts</strong>
            </a>
            <a href="{{ url('dashboard') }}" class="flex w-full gap-4 px-8 py-4 text-gray-100 rounded-md hover:text-white hover:bg-green-700">
                <x-heroicon-o-academic-cap class="flex-shrink-0 w-5 h-5" />
                <strong>Certificates</strong>
            </a>
        </div>
        <div class="px-8 py-6">
            <p class="text-sm text-gray-100">OTHERS</p>
        </div>
        <div class="px-8 ">
            <a href="{{ url('dashboard') }}" class="flex w-full gap-4 px-8 py-2 text-gray-100 rounded-md hover:text-white hover:bg-green-700">
                <x-heroicon-o-newspaper class="flex-shrink-0 w-5 h-5" />
                <span>News</span>
            </a>
            <a href="{{ url('dashboard') }}" class="flex w-full gap-4 px-8 py-2 text-gray-100 rounded-md hover:text-white hover:bg-green-700">
                <x-heroicon-o-clipboard-document class="flex-shrink-0 w-5 h-5" />
                <span>Bulletin Board</span>
            </a>
            <a href="{{ url('dashboard') }}" class="flex w-full gap-4 px-8 py-2 text-gray-100 rounded-md hover:text-white hover:bg-green-700">
                <x-heroicon-o-users class="flex-shrink-0 w-5 h-5" />
                <span>Crowdfunding</span>
            </a>
            <a href="{{ url('dashboard') }}" class="flex w-full gap-4 px-8 py-2 text-gray-100 rounded-md hover:text-white hover:bg-green-700">
                <x-heroicon-o-cube-transparent class="flex-shrink-0 w-5 h-5" />
                <span>Galansiyang</span>
            </a>
        </div>
            
    </div>
</aside>