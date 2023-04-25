<div class="absolute top-0 left-0 right-0 z-50 py-3 bg-white">
    <div class="absolute inset-0 z-30 shadow pointer-events-none" aria-hidden="true"></div>
    <div class="relative z-20">
        <div
            class="flex items-center justify-between px-6 py-5 mx-auto max-w-7xl sm:py-4 md:justify-start md:space-x-10 lg:px-8">
            <div>
                <a href="#" class="flex">
                    <img src="{{ url('img/logo.svg') }}" class="w-auto h-10" alt="">
                </a>
            </div>
            <div class="-my-2 -mr-2 md:hidden">
                <button type="button"
                    class="inline-flex items-center justify-center p-2 text-gray-400 bg-white rounded-md hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                    aria-expanded="false">
                    <span class="sr-only">Open menu</span>
                    <!-- Heroicon name: outline/bars-3 -->
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <div class="hidden md:flex md:flex-1 md:items-center md:justify-between">
                <nav class="flex space-x-10">


                </nav>
                <div class="flex items-center text-gray-900 md:ml-12 lg:gap-12">
                    <x-header-menu-link label="Home" href="{{ url('/') }}" active="{{ request()->is('/') }}" />
                    <x-header-menu-link label="About" href="{{ url('/about') }}" active="{{ request()->is('/about') }}" />
                    <x-header-menu-link label="Blog" href="{{ url('/blog') }}" active="{{ request()->is('/blog') }}" />
                    <x-header-menu-link label="FAQ" href="{{ url('/faq') }}" active="{{ request()->is('/faq') }}" />
                    <x-header-menu-link label="Login" href="{{ url('/login') }}" active="{{ request()->is('/login') }}" />

                    <a href="{{ route('register') }}"
                        class="inline-flex items-center justify-center px-8 py-2 text-base font-medium text-gray-900 border border-transparent rounded-full shadow-sm bg-light-green hover:bg-light-green/80">Get
                        Started</a>
                </div>
            </div>
        </div>
    </div>
</div>
