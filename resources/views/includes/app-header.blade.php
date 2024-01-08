<div class="px-4 py-3 border-b shadow-sm sm:px-6 lg:py-6 lg:px-16">
    <div class="flex justify-between">
        <div class="flex items-center gap-6">
            <a href="{{ url('dashboard') }}">
                <img src="{{ asset('img/logo-green.png') }}" class="w-auto h-8" alt="">
           </a>
            
        </div>
        <div class="flex items-center gap-6">
            <a href="#" class="text-normal-green">
                <x-heroicon-o-question-mark-circle class="flex-shrink-0 w-7 h-7"/>
            </a>
            <a href="#" class="text-normal-green">
                <x-heroicon-o-bell-alert class="flex-shrink-0 w-7 h-7"/>
            </a>
            <div class="relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
                <div @click="open = ! open">
                    <button type="button" class="py-1 text-normal-green">
                        <x-heroicon-o-shopping-cart class="flex-shrink-0 w-7 h-7"/>
                    </button>
                </div>

                <div x-show="open"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute right-0 z-50 mt-2 origin-top-right rounded-md shadow-lg w-72"
                        style="display: none;"
                        @click="open = false">
                    <div class="py-1 bg-white rounded-md ring-1 ring-black ring-opacity-5 dark:bg-gray-700">
                        @livewire('cart-summary')
                    </div>
                </div>
            </div>

            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button type="button" class="py-1 text-normal-green">
                        <x-heroicon-o-user-circle class="flex-shrink-0 w-7 h-7"/>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-dropdown-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>
    </div>
</div>