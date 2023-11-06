<div class="px-4 py-3 border-b shadow-sm sm:px-6 lg:py-6 lg:px-16">
    <div class="flex justify-between">
        <div class="flex items-center gap-6">
            <div class="relative flex items-center gap-4 px-2 py-1 bg-gray-200 rounded-sm">
                <div class="flex items-center gap-4 px-3">
                    <x-heroicon-s-bolt class="flex-shrink-0 w-7 h-7 text-normal-green" />
                    <p class="w-8 text-xl">{{ Auth::user()->seedballCredits() }}</p>
                </div>
                <a href="{{ url('shop/seedballs') }}" class="p-1 text-sm text-white border border-transparent rounded-sm shadow-sm bg-normal-green hover:bg-gray-700">
                    <x-heroicon-s-plus-small class="w-7 h-7"/>
                </a>
            </div>
            <div class="hidden md:block">
                <a href="{{ url('shop') }}" class="btn-box-primary">
                    <x-heroicon-o-shopping-bag class="flex-shrink-0 w-7 h-7"/>
                    <span>View Shop</span>
                </a>
            </div>
            
        </div>
        <div class="flex items-center gap-6">
            <a href="#" class="text-normal-green">
                <x-heroicon-o-question-mark-circle class="flex-shrink-0 w-7 h-7"/>
            </a>
            <a href="#" class="text-normal-green">
                <x-heroicon-o-bell-alert class="flex-shrink-0 w-7 h-7"/>
            </a>
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